<?php

/*
 * This file is part of the OpenDataBio app.
 * (c) OpenDataBio development team https://github.com/opendatabio
 */

namespace App;

use Illuminate\Database\Eloquent\Model;
use FuzzyWuzzy\Fuzz;
use Illuminate\Database\Eloquent\Builder;

class Person extends Model
{
    use Revisionable;
    protected $revisionCreationsEnabled = true;

    // Gramatically incorrect, but helps development
    protected $table = 'persons';
    protected $fillable = ['full_name', 'abbreviation', 'email', 'institution', 'herbarium_id'];

    public function rawLink()
    {
        return "<a href='".url('persons/'.$this->id)."'>".htmlspecialchars($this->abbreviation).'</a>';
    }

    protected static function boot()
    {
        parent::boot();
        static::bootRevisionableTrait();
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('abbreviation', 'asc');
        });
    }

    // For use in Person::duplicates
    public static function normalize($text)
    {
        $text = trim(strtolower($text));
        $text = preg_replace('/[^a-z ]/', '', $text);
        $tarr = explode(' ', $text);
        foreach ($tarr as $key => $token) {
            if (strlen($token) < 2) {
                unset($tarr[$key]);
            }
        }

        return join(' ', $tarr);
    }

    // Looks for possible duplication of persons. Returns a collection of possible dupes
    public static function duplicates($fullname, $abbreviation)
    {
        $fuzz = new Fuzz();
        $fullname = self::normalize($fullname);
        $abbreviation = self::normalize($abbreviation);
        $persons = self::all()->filter(function ($element) use ($fuzz, $fullname, $abbreviation) {
            $fn = self::normalize($element->full_name);
            $abb = self::normalize($element->abbreviation);
            $score = 0;

            return $fuzz->weightedRatio($abb, $abbreviation) > 70 or
                   $fuzz->weightedRatio($fn, $fullname) > 70;
        });

        return $persons;
    }

    public function herbarium()
    {
        return $this->belongsTo('App\Herbarium');
    }

    // for specialist taxons
    public function taxons()
    {
        return $this->belongsToMany('App\Taxon');
    }

    public function collected()
    {
        return $this->hasMany(Collector::class);
    }

    public function vouchers()
    {
        return $this->hasMany(Voucher::class);
    }

    public function measurements()
    {
        return $this->hasMany(Measurements::class);
    }

    // convenience alias
    public function getFullnameAttribute()
    {
        return $this->attributes['full_name'];
    }
}
