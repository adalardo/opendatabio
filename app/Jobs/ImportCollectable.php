<?php

/*
 * This file is part of the OpenDataBio app.
 * (c) OpenDataBio development team https://github.com/opendatabio
 */

namespace App\Jobs;

use App\Taxon;
use App\Identification;
use App\Person;
use App\Collector;
use App\Herbarium;
use App\Project;
use App\ODBFunctions;

class ImportCollectable extends AppJob
{
    protected function validateHeader($field = 'collector')
    {
        if (array_key_exists('project', $this->header)) {
            $this->validateProject($this->header);
        }
        if (array_key_exists($field, $this->header)) {
            $person = $this->extractCollectors('Header', $this->header, $field);
            if ($person) {
                $this->header[$field] = $person;
            }
        }
    }

    /*
     * Changes the $fieldName item of the $registry array to the id of valid Project.
     * If this item is not present in the array, it uses the defaultProject of the user.
     * Otherwise it interprets the value of this item as id or name of a project.
     * @retuns true if the project is validated; false if it fails.
     */
    protected function validateProject(&$registry)
    {
        if (($this->header !== $registry) and array_key_exists('project', $this->header)) {
            $registry['project'] = $this->header['project'];

            return true;
        }
        if (array_key_exists('project', $registry)) {
            $valid = ODBFunctions::validRegistry(Project::select('id'), $registry['project']);
            if (null === $valid) {
                $this->skipEntry($registry, 'project'.' '.$registry['project'].' was not found in the database');

                return false;
            }
            $registry['project'] = $valid->id;

            return true;
        }
        if ($this->header !== $registry) {
            $registry['project'] = Auth::user()->defaultProject->id;
        }

        return true;
    }

    protected function extractCollectors($callerName, $registry, $field = 'collector')
    {
        if (('Header' !== $callerName) and array_key_exists($field, $this->header)) {
            return $this->header[$field];
        }
        if (!array_key_exists($field, $registry)) {
            return null;
        }
        $persons = explode(',', $registry[$field]);
        $ids = array();
        foreach ($persons as $person) {
            $valid = ODBFunctions::validRegistry(Person::select('id'), $person, ['id', 'abbreviation', 'full_name', 'email']);
            if (null === $valid) {
                $this->appendLog('WARNING: '.$callerName.' reffers to '.$person.' as member of '.$field.', but this person was not found in the database. Ignoring person '.$person);
            } else {
                $ids[] = $valid->id;
            }
        }

        return array_unique($ids);
    }

    protected function extractIdentification($registry)
    {
        if (!array_key_exists('taxon', $registry)) {
            return null;
        }
        $taxon = $registry['taxon'];
        if (is_numeric($taxon)) {
            $taxon_id = Taxon::select('id')->where('id', '=', $taxon)->get();
        } else {
            $taxon_id = Taxon::select('id')->whereRaw('odb_txname(name, level, parent_id) = ?', [$taxon])->get();
        }
        if (count($taxon_id)) {
            $identification['taxon_id'] = $taxon_id->first()->id;
        } else {
            $this->appendLog("WARNING: Taxon $taxon was not found in the database.");

            return null;
        }
        // Map $registry['identifier'] to $identification['person_id']
        if (array_key_exists('identifier', $registry)) {
            $identification['person_id'] = ODBFunctions::validRegistry(Person::select('id'), $registry['identifier'], ['id', 'abbreviation', 'full_name', 'email']);
            if (null === $identification['person_id']) {
                $this->appendLog('WARNING: Identifier '.$registry['identifier'].' was not found in the person table.');
            } else {
                $identification['person_id'] = $identification['person_id']->id;
            }
        } else {
            $identification['person_id'] = null;
        }
        if (array_key_exists('identification_based_on_herbarium', $registry) && array_key_exists('herbarium_code', $registry)) {
            $identification['herbarium_id'] = ODBFunctions::validRegistry(Herbarium::select('id'), $registry['identification_based_on_herbarium'], ['id', 'acronym', 'name', 'irn']);
            if (null === $identification['herbarium_id']) {
                $this->appendLog("WARNING: Herbarium $herbarium was not found in the herbarium table or their reference is missed! Ignoring this herbarium");
                $identification['herbarium_reference'] = null;
            } else {
                $identification['herbarium_id'] = $identification['herbarium_id']->id;
                $identification['herbarium_reference'] = $registry['herbarium_code'];
            }
        } else {
            $identification['herbarium_id'] = null;
            $identification['herbarium_reference'] = null;
        }
        $identification['notes'] = array_key_exists('identification_notes', $registry) ? $registry['identification_notes'] : null;
        $identification['modifier'] = array_key_exists('modifier', $registry) ? $registry['modifier'] : 0;
        $identification['date'] = array_key_exists('identification_date', $registry) ? $registry['identification_date'] : $registry['date'];

        return $identification;
    }

    protected function createCollectorsAndIdentification($object_type, $object_id, $collectors = null, $identification = null)
    {
        if ($identification) {
            $date = $identification['date'];
            $identification = new Identification([
                'object_id' => $object_id,
                'object_type' => $object_type,
                'taxon_id' => $identification['taxon_id'],
                'person_id' => $identification['person_id'],
                'herbarium_id' => $identification['herbarium_id'],
                'herbarium_reference' => $identification['herbarium_reference'],
                'notes' => $identification['notes'],
                'modifier' => $identification['modifier'],
            ]);
            $identification->setDate($date);
            $identification->save();
        }
        if ($collectors) {
            foreach ($collectors as $collector) {
                Collector::create([
                        'person_id' => $collector,
                        'object_id' => $object_id,
                        'object_type' => $object_type,
                ]);
            }
        }
    }
}
