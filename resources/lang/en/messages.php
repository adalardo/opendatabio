<?php

return array (
  'taxon_parent_required_error' => 'A parent name is required for all species, infraspecies and clades.',
  'taxon_parent_genus_error' => 'The parent for a species must be of genus level or similar.',
  'taxon_parent_species_error' => 'The parent name for all subspecies, varieties and forms must be a species.',
  'taxon_parent_level_error' => 'The taxon level indicated is inconsistent with the parent\'s level.',
  'taxon_senior_level_error' => 'The senior indicated is from a taxonomic level too far from this name.',
  'taxon_senior_valid_error' => 'A name must not be marked as valid if it has a senior name.',
  'taxon_senior_invalid_error' => 'The senior name indicated must be valid.',
  'taxon_author_error' => 'You must provide an author name as a string or select one from the dropdown, but not both.',
  'taxon_bibref_error' => 'You must provide a bibliographic reference as a string or select one from the dropdown, but not both.',
  'stored' => 'Resources stored!',
  'saved' => 'Resources saved!',
  'name_error' => 'You need to fill in the name before proceeding',
  'mobot_error' => 'Error accessing MOBOT server',
  'ipni_error' => 'Error accessing the IPNI servers!',
  'mycobank_error' => 'Error accessing Mycobank server',
  'apis_not_found' => 'This name was not found on the API servers. Check the links on the top of the page for searching directly on their servers.',
  'mobot_multiple_hits' => 'The MOBOT server returned multiple hits for this query. Double check if all information is correct!',
  'mobot_none_synonym' => 'The MOBOT server indicates that this name is invalid, but did not provide a valid synonym!',
  'ipni_multiple_hits' => 'The IPNI server returned multiple hits for this query. Double check if all information is correct!',
  'mycobank_multiple_hits' => 'The Mycobank server returned multiple hits for this query. Double check if all information is correct!',
  'parent_not_registered' => 'APIs indicate that this name parent should be :name, but this is not registered in the database',
  'senior_not_registered' => 'APIs indicate that this name is a junior synonym of :name, but this name is not registered in the database',
  'fk_error' => 'This resource is associated with other objects and cannot be removed',
  'removed' => 'Resource removed!',
  'wrong_password' => 'Wrong password!',
  'acronym_error' => 'You must provide an acronym!',
  'acronym_not_found' => 'Acronym not found or error accessing IH site!',
  'dispatched' => 'Job dispatched! See details on the Jobs tab.',
  'bibtex_at_error' => 'The BibTex entry must start with an @ sign!',
  'bibtex_error' => 'This file could not be parsed as valid BibTeX!',
  'invalid_date_error' => 'The date entered is invalid. Note that if the month is marked as unknown, the day must be unknown too.',
  'invalid_identification_date_error' => 'The identification date entered is invalid. Note that if the month is marked as unknown, the day must be unknown too.',
  'date_future_error' => 'The collection date must not be greater than today.',
  'identification_date_future_error' => 'The identification date must not be less than the collection date, and must not be greater than today.',
  'no_valid_project_error' => 'The logged in user has no valid projects!',
  'geom_error' => 'The geometry informed is invalid. Check for missing parentheses, extra commas, and verify that the last position in a polygon is equal to the first.',
  'geom_parent_error' => 'The coordinates for this location do not fall within the specified parent\'s coordinates, please check!',
  'unable_autodetect' => 'Unable to autodetect parent!',
  'movenotpossible' => 'Impossible to move to this parent!',
  'no_valid_dataset_error' => 'The logged in user has no valid datasets!',
  'no_valid_trait_error' => 'There is no trait available for creating measurements. Create a new trait in the Traits menu.',
  'invalid_trait_type_error' => 'The allowed object types for this trait are not compatible with the referenced object.',
  'name' => 'Name',
  'checkapis' => 'Check APIs!',
  'taxon_level' => 'Level',
  'taxon_level_hint' => 'Fill in the taxonomic level for this taxon.',
  'parent' => 'Parent',
  'taxon_parent_hint' => 'What is the taxon above this one? For a species, this must be a genus, for a genus this is usually a family, and so on.',
  'senior' => 'Senior',
  'taxon_senior_hint' => 'Fill this box if the taxon name being registered is a junior synonym of another name. A name registered as junior may not be registered as valid.',
  'valid' => 'Valid',
  'taxon_author' => 'Author',
  'taxon_author_hint' => 'Provide either the name of the author, if the taxon is described in the literature, or the Person associated with it, in case the taxon is still unpublished. Do not fill both fields.',
  'taxon_bibreference' => 'Bibliographic Reference',
  'taxon_bibreference_hint' => 'Fill either the short bibliographic reference where the taxon was described, or select the registered reference from the dropdown. You may fill one or the other, but not both.',
  'mobot_key' => 'MOBOT id number',
  'ipni_key' => 'IPNI id number',
  'mycobank_key' => 'Mycobank id number',
  'notes' => 'Notes',
  'help' => 'Help!',
  'hint_taxon_create' => 'Use this form to add a new Taxon to the database. After filling the taxon\'s name, the button "Check APIs" may be used to automatically fill most information.',
  'new_taxon' => 'New / Edit taxon',
  'whoops' => 'Whoops! Something went wrong!',
  'add' => 'Register!',
  'back' => 'Back',
  'taxon_index_hint' => 'This table stores the taxonomic names in use for this database. Click on any name to see related information, such as parents and descendants. A double asterisk (**) indicates that a name is marked as invalid.',
  'create' => 'Create',
  'registered_taxons' => 'Registered Taxa',
  'taxon' => 'Taxon',
  'author' => 'Author',
  'bibreference' => 'Bibliographic Reference',
  'level' => 'Level',
  'valid_status' => 'Valid status',
  'specialists' => 'Specialists',
  'measurements' => 'Measurements',
  'create_measurements' => 'Create measurements',
  'edit' => 'Edit',
  'taxon_ancestors_and_children' => 'Related taxa',
  'plants_and_vouchers' => 'Plants and herbarium samples.',
  'tag_or_number' => 'Tag or Number',
  'main_collector' => 'Main collector',
  'voucher_person_hint' => 'Register here the main person responsible for collecting this herbarium sample. This name will be used to identify this herbarium sample.',
  'voucher_number' => 'Herbarium sample number',
  'hint_voucher_number' => 'This is the sequential number of herbarium sample collected by the person described as main collector.',
  'additional_collectors' => 'Additional collectors',
  'voucher_collectors_hint' => 'Register here any additional collectors for this herbarium sample.',
  'collection_date' => 'Collection date',
  'voucher_date_hint' => 'This is the collection date of the herbarium sample. If the day or month is unknown, use the question marks.',
  'voucher_parent_type' => 'Parent Type',
  'voucher_parent_type_hint' => 'A herbarium sample needs to be associated with a marked Plant, or in case the marked Plant is not available in the database, it can be associated with a Location from which it was collected. Please note that if you associate a herbarium sample to a Location, you must provide the species identification, but if you associate it with a Plant, the identification will be copied from that plant.',
  'parent_location' => 'Sample location',
  'voucher_parent_location_hint' => 'If the plant from which the sample was taken is not registered in the database, use this form to register where sample was collected',
  'parent_plant' => 'Parent Plant',
  'voucher_parent_plant_hint' => 'If this sample was taken from a registered plant, register here which plant was it',
  'project' => 'Project',
  'voucher_project_hint' => 'Register here the project to which this herbarium sample belongs. This is relevant to control who can access and edit data about it',
  'voucher_taxon_hint' => 'Indicate the taxon to which this herbarium sample was identified.',
  'modifier' => 'Modifier',
  'voucher_modifier_hint' => 'Register here the identification modifier used. s.s. = "sensu strictu", meaning strictly speaking; s.l. = "sensu lato", meaning "broadly"; c.f. = "confer", meaning that the identification is believed to be correct, but is not certain; aff. = "affinis", meaning there is evidence that this is a new species, still undescribed, but related to the given taxon; "vel aff." means "or affinis", which indicates that the plant may be from the indicated taxon or from a related, undescribed species.',
  'identifier' => 'Identifier',
  'voucher_identifier_id_hint' => 'Register here the person responsible for identifying this herbarium sample.',
  'identification_date' => 'Identification date',
  'voucher_identification_date_hint' => 'This is the identification date of the herbarium sample. If the day or month is unknown, use the question marks.',
  'id_herbarium' => 'Id based on herbarium',
  'voucher_herbarium_id_hint' => 'If the identification was based on a herbarium sample, register here the acronym for the herbarium. You will need to provide the number of the sample in the "identification notes" field. Note that this field should not be used to register where this herbarium sample was stored, use the table below for that.',
  'identification_notes' => 'Identification notes',
  'herbarium' => 'Herbarium',
  'herbarium_number' => 'Number at the herbarium',
  'hint_voucher_create' => 'In this screen you can register a new collected herbarium sample. A sample needs to be associated with a marked Plant, or in case the marked Plant is not available in the database, it can be associated with a Location from which it was collected. Please note that if you associate a sample to a Location, you must provide the species identification, but if you associate it with a Plant, the identification will be copied from that plant. The main identifier of the sample is the combination of the main collector and a sequential number.',
  'new_voucher' => 'New / Edit Herbarium Sample',
  'vouchers_hint' => 'This table represent herbarium samples, which are pressed plant samples deposited for future reference in herbaria. To register a new sample, proceed to the screen of the plant or location from which the sample was taken.',
  'vouchers' => 'Herbarium samples',
  'location_and_tag' => 'Location and tag',
  'identification' => 'Identification',
  'unidentified' => 'Unidentified',
  'voucher' => 'Herbarium sample',
  'identified_by' => 'Identified by',
  'identification_based_on' => 'Identification based on',
  'plant' => 'Plant',
  'location' => 'Location',
  'voucher_herbaria' => 'Herbaria',
  'collectors' => 'Collectors',
  'edit_user' => 'Edit User',
  'email' => 'E-mail address',
  'password' => 'Password',
  'password_change_hint' => 'Use this field to force the password for this user to be changed. Leave it blank if you don\'t want to edit it.',
  'access_level_change_hint' => 'A user\'s access level determines what they can do in the system. SuperAdmins have edit access to all data in the system. Full users can be collaborators or admins to projects and datasets, and registered users may only view data that is explicitly shared with them. When you promote a user to Full User or Superadmin, the system will automatically create them a workspace. If you demote a user to Registered User, the system will automatically remove all admin and collaborator access they had in projects and datasets.',
  'save' => 'Save changes',
  'remove_user' => 'Remove User',
  'users_hint' => 'This table represent the system users. Each user has a valid e-mail and password, and an access level, which determines the actions he or she may take on the system. This table does not store information about plant or herbarium sample collectors or specialists. Use the "People" tab for that.',
  'registered_users' => 'Registered Users',
  'unauthorized' => 'The current user is not authorized to perform this action!',
  'unknown_date' => '??',
  'notfound' => 'The item you are trying to see was not found in the database. Maybe you followed an outdated link?',
  'plant_tag' => 'Plant tag',
  'hint_plant_tag' => 'Register here which tag was used to mark this plant. There should be no other plant from this location with the same tag.',
  'plant_location_hint' => 'In which location was this plant collected? If this is a plot, you must also register the relative position.',
  'plant_project_hint' => 'Under which project do you wish to register this plant? This will affect which users will be able to see this register.',
  'tag_date' => 'Tag date',
  'plant_date_hint' => 'Register here the date in which the plant was tagged. If the day or month is not known, use the question mark.',
  'relative_position' => 'Relative position',
  'plant_position_hint' => 'Register here the relative coordinates in respect to the plot in which this plant is marked. Make sure to use the same (x,y) coordinates as the plot. If the location given was a GPS point, ignore this field.',
  'tag_team' => 'Tagging team',
  'plant_collectors_hint' => 'Register here all people responsible for tagging for this plant. You can choose more than one.',
  'plant_taxon_hint' => 'Indicate the taxon to which this plant was identified.',
  'plant_modifier_hint' => 'Register here the identification modifier used.
s.s. = "sensu strictu", meaning strictly speaking;
s.l. = "sensu lato", meaning "broadly";
c.f. = "confer", meaning that the identification is believed to be correct, but is not certain;
aff. = "affinis", meaning there is evidence that this is a new species, still undescribed, but related to the given taxon;
"vel aff." means "or affinis", which indicates that the plant may be from the indicated taxon or from a related, undescribed species.',
  'plant_identifier_id_hint' => 'Register here the person responsible for the plant identification. This may be one of the collectors, or not.',
  'plant_identification_date_hint' => 'Register here the date when the plant was identified with the current taxonomic name.',
  'plant_herbarium_id_hint' => 'Indicate here if the identification was done based on a herbarium sample. If you do so, use the "Identification notes" field to indicate the herbarium sample number.',
  'hint_plant_create' => 'Use this form to register a new marked plant.',
  'new_plant' => 'New / Edit Plant',
  'plants_hint' => 'This table lists all marked plants in the database. Each plant is identified by its location and a tag. There can only be one plant with the same tag for the same location.',
  'plants' => 'Plants',
  'not_registered' => 'Not registered',
  'edit_person' => 'Edit Person',
  'remove_person' => 'Remove Person',
  'full_name' => 'Full Name',
  'abbreviation' => 'Abbreviation',
  'abbreviation_hint' => 'The abbreviation field is the abbreviated name which the person uses in publications and other catalogs. It must contain only uppercase letters, hyphens, periods, commas or spaces. A valid abbreviation for the name "Charles Robert Darwin" would be "DARWIN, C. R.". When registering a new person, the system suggests the name abbreviation, but the user is free to change it to better adapt it to the usual abbreviation used by each person. The abbreviation should be unique for each person.',
  'institution' => 'Institution',
  'person_herbarium_hint' => 'Fill this if this person is associated with an herbarium. He or she will then be listed as specialist.',
  'specialist_in' => 'Specialist in',
  'person_specialist_hint' => 'Register here the taxa for which this person is a specialist.',
  'person_hint' => 'This table represent people which may or may not be directly involved with the database. It is used to store information about plant and herbarium sample collectors, specialists, and database users. When registering a new person, the system suggests the name abbreviation, but the user is free to change it to better adapt it to the usual abbreviation used by each person. The abbreviation should be unique for each person.',
  'new_person' => 'New Person',
  'registered_persons' => 'Registered People',
  'person_details' => 'Person details',
  'tagged_or_collected' => 'Plants tagged or collected',
  'confirm_person' => 'Confirm Person insertion',
  'acronym' => 'Acronym',
  'irn' => 'IRN',
  'hint_herbaria_page' => 'This table contains the registered herbaria in which the herbarium sample can be stored. All herbaria should have an identification number from the Index Herbariorum, which can be used to retrieve other details such as address, phone, or e-mail. You can register herbarias using the acronym (also called Herbarium Code), which normally consists on two to five letters. All other fields will be filled in automatically.',
  'new_herbarium' => 'Register Herbarium',
  'checkih' => 'Check Index Herbariorum',
  'registered_herbaria' => 'Registered Herbaria',
  'details' => 'Details',
  'remove_herbarium' => 'Remove Herbarium',
  'userjobs_hint' => 'Jobs are requests that are processed on the background by the server. They are mostly used for importing and exporting data. Any user only has access to his/her own jobs. The status column indicates: "Submitted" if the job has been submitted, but it\'s still not being processed; "Processing" if it\'s being processed by the database; "Success" if the execution ended without errors;  "Failed" if the execution results in error and "Cancelled" if the user has asked the job to be cancelled. You may use the buttons on the left of the table to attempt to cancel a job that has not finished, retry a job that has failed, or remove the job information from the database.',
  'registered_userjobs' => 'Your Registered Jobs',
  'id' => 'ID',
  'status' => 'Status',
  'created_at' => 'Created',
  'updated_at' => 'Last updated',
  'progress' => 'Progress',
  'actions' => 'Actions',
  'retry' => 'Retry',
  'cancel' => 'Cancel',
  'remove' => 'Remove',
  'monitor_userjob' => 'Monitor Job',
  'jobid' => 'Job ID',
  'type' => 'Type',
  'log' => 'Log',
  'home' => 'Home',
  'login' => 'Login',
  'register' => 'Register',
  'docs' => 'Documentation',
  'remember' => 'Remember me',
  'forgot' => 'Forgot password?',
  'confirm_password' => 'Confirm Password',
  'api_token' => 'API Token',
  'current_password' => 'Current Password',
  'reset' => 'Reset!',
  'reset_password' => 'Reset Password',
  'send_password' => 'Send Password Reset Link',
  'edit_profile' => 'Edit profile',
  'new_password' => 'New Password',
  'password_hint' => 'Use this field to change your password. Leave it blank if you don\'t want to edit it.',
  'default_person' => 'Default Person',
  'hint_default_person' => 'If you select a Person here, this will be used as the default Person on all relevant forms, such as when filling in herbarium samples or plants collected. You should probably set this to your own name.',
  'hint_trait_create' => 'Here you can create a new trait that can be used to associate measurements to plants, herbarium samples, taxa or locations. The trait definition must be precise and include the measuring instrument or calculating method. In other words, instead of a trait named "Diversity", as there are several ways of estimating diversity, use "Shannon Diversity", for instance. Note that after measures have been linked to a trait, it cannot be altered anymore!',
  'new_trait' => 'New / Edit Trait',
  'language' => 'Language',
  'description' => 'Description',
  'export_name' => 'Export name',
  'trait_export_hint' => 'This name will be used as a label when exporting spreadsheets. It must be unique in the database. Please provide a name that is easy to identify.',
  'trait_type_hint' => 'There are currently seven types of traits available in OpenDataBio. Quantitative traits are measured as single numbers, which may be real valued or integer, depending on the type specified. Quantitative traits require the definition of the measuring unit, and may have an associated valid range. Qualitative traits are selected from a list of categories. Qualitative traits in which there is no ordering of categories are called "categorical" (ex: habitat might be "rain forest" or "mangrove"), and you may specificy if a single measurement may associate a single category or more than one. Ordinal traits are qualitative traits in which there is a natural ordering (the trophic class of a lake may be "oligotrophic", "mesotrophic" or "eutrophic"). Text traits may be freely entered by the user, and link traits have an associate object and number (see wiki page).',
  'object_types' => 'Object Types',
  'trait_objects_hint' => 'List here the object types that may have this trait. For example, for a "Diameter" trait, select Plant; for a "Species Richness" trait, select Location. You may choose more than one object type.',
  'unit' => 'Unit',
  'hint_trait_unit' => 'In what unit is this trait measured? Common values include day, year, meter, m², m³, individuals, etc.',
  'range_min' => 'Range minimum',
  'hint_trait_min' => 'Does this trait have a minimum value? Measurements will be checked against this value and rejected if they are smaller than this.',
  'range_max' => 'Range maximum',
  'hint_trait_max' => 'Does this trait have a maximum value? Measurements will be checked against this value and rejected if they are larger than this.',
  'traits_hint' => 'Traits are variables that can be measured on plants, herbarium samples, locations and taxa. A trait definition must be as precise as possible.',
  'create_trait' => 'Create Trait',
  'traits' => 'Traits',
  'detail' => 'Details',
  'trait' => 'Trait',
  'range' => 'Range',
  'rank' => 'Rank',
  'new_measurement' => 'New/Edit Measurement',
  'measurement_for' => 'Measurement for',
  'measurement_date' => 'Measurement date',
  'measurement_date_hint' => 'Register the date in which this measurement was done. If the day or month is not known, mark it with ??',
  'measurement_bibreference' => 'Bib Reference for Measurement',
  'measurement_bibreference_hint' => 'If this specific measurement has a bibliographic reference (differing from the Dataset reference), register it here',
  'measurement_person' => 'Person',
  'measurement_person_hint' => 'Register the person responsible for this measurement',
  'measurement_dataset' => 'Dataset',
  'measurement_dataset_hint' => 'In which dataset should this measurement be stored?',
  'value' => 'Value',
  'measurements_hint' => 'The main data in the database, measurements represent any kind of data associated with a Taxon, Plant, Location or Herbarium sample.',
  'object' => 'Object',
  'date' => 'Date',
  'measurement' => 'Measurement',
  'dataset' => 'Dataset',
  'person' => 'Person',
  'reference' => 'Reference',
  'new_location' => 'New/Edit Location',
  'location_name' => 'Location name',
  'adm_level' => 'Administrative level',
  'location_adm_level_hint' => 'Stores the type of the location. Some types are actual administrative levels, related to the legal status of the location (countries, states, provinces, etc). Some are related to the nature of the location (such as a GPS point, or a plot).',
  'geometry' => 'Geometry',
  'geom_hint' => 'Store here the geometry of the location. This field accepts a Well Known Text of a Point, LineString, Polygon or MultiPolygon (such as the WKT that may be exported from a GIS system). NOTE that longitudes should be inserted before latitudes. Thus the WKT \'POINT(-44.0 -22.5 )\' refers to a point at 44 degrees of longitude west and 22 degrees and 30 minutes of latitude south.',
  'latitude' => 'Latitude',
  'longitude' => 'Longitude',
  'latlong_hint' => 'Enter here the latitude and longitude of the point or plot. If the latitude or longitude is expressed as decimal degrees, enter the degrees with a decimal point in the degree field (such as 22.5 degrees). If the latitude or longitude is expressed as decimal minutes, enter it with a decimal point in the minutes field (such as 22 degrees and 50.980 minutes).',
  'dimensions' => 'Dimensions',
  'start' => 'Start',
  'dimensions_hint' => 'The dimensions of a plot, expressed in meters.',
  'altitude' => 'Altitude',
  'datum' => 'Datum',
  'datum_hint' => 'This field contains the GPS datum associated with this location. If left blank, it is assumed that the datum is WGS84.',
  'location_parent' => 'Parent',
  'location_parent_hint' => 'This field stores the parent of the current location. Store here the parent location one administrative level above. For example, if the location is a city, store the city\'s state. If the location is a federal conservation unit, store the country.',
  'location_uc' => 'Conservation Unit',
  'location_uc_hint' => 'If this is a plot or point inside a conservation unit, store this information here.',
  'remove_location' => 'Remove Location',
  'location_hint' => 'This table stores the geographical locations in which plants are collected, and samples are taken. Note that the latitude and longitude reported may be that of the location\'s centroid',
  'registered_locations' => 'Registered Locations',
  'position' => 'Position',
  'uc' => 'Conservation Unit',
  'total_descendants' => 'Total descendants',
  'location_ancestors_and_children' => 'Related locations',
  'new_dataset' => 'New/Edit Dataset',
  'privacy' => 'Data Privacy',
  'dataset_privacy_hint' => 'Select here if the data belonging to this dataset should be restricted to the users listed as administrators, collaborators or viewers (restricted to authorized users); if the data should be available to all registered users, or if the data can be accessed by everyone.',
  'tags' => 'Tags',
  'dataset_bibreference' => 'Reference for dataset',
  'dataset_bibreference_hint' => 'Set this field either if the dataset was collected from a bibbliographic reference, or if the data is published.',
  'admins' => 'Administrators',
  'collabs' => 'Collaborators',
  'viewers' => 'Viewers',
  'dataset_admins_hint' => 'Use these selectors to add users to the administrator, collaborator or viewer lists of this dataset. Administrator have full control and access, collaborators have limited control, and viewers have read-only access to the project\'s data. Notice that only full users and superadmins may be assigned as dataset collaborators or admins. Users that are only registered may only be assigned as viewers.',
  'datasets_hint' => 'Datasets are sets of measurement data. They control the access and permissions for inserting and editing new data to the database.',
  'create_dataset' => 'Create Dataset',
  'my_datasets' => 'My datasets',
  'datasets' => 'Datasets',
  'members' => 'Members',
  'data_privacy' => 'Data Privacy',
  'collaborators' => 'Collaborators',
  'project_privacy_hint' => 'Select here if the data belonging to this project should be restricted to the users listed as administrators, collaborators or viewers (restricted to authorized users); if the data should be available to all registered users, or if the data can be accessed by everyone.',
  'project_admins_hint' => 'Use these selectors to add users to the administrator, collaborator or viewer lists of this project. Administrator have full control and access, collaborators have limited control, and viewers have read-only access to the project\'s data. Notice that only full users and superadmins may be assigned as project collaborators or admins. Users that are only registered may only be assigned as viewers.',
  'new_project' => 'New / Edit Project',
  'projects_hint' => 'Projects are a way to group together several resources in the database, such as marked plants and herbarium samples. Each project has a list of administrators, collaborators and viewers. Administrator have full control and access, collaborators have limited control, and viewers have read-only access to the project\'s data.',
  'create_project' => 'Create Project',
  'my_projects' => 'My projects',
  'projects' => 'Projects',
  'locations' => 'Locations',
  'taxons' => 'Taxa',
  'auxiliary' => 'Others',
  'persons' => 'People',
  'references' => 'References',
  'herbaria' => 'Herbaria',
  'users' => 'Users',
  'userjobs' => 'Jobs',
  'edit_reference' => 'Edit Reference',
  'bibtex_entry' => 'BibTeX entry',
  'remove_reference' => 'Remove Reference',
  'references_hint' => 'This table contains the bibliographic references used when incorporating published data to the database. All references should be in BibTeX format - all major citation softwares are able to export to BibTeX format. Check the "standardize" box if you want to generate standard BibTeX keys for the imported entries. These will be used instead of the keys that are present in the files.',
  'import_references' => 'Import References',
  'standardize_keys' => 'Standardize Keys',
  'import_file' => 'Import File',
  'bibliographic_references' => 'Bibliographic References',
  'bibtex_key' => 'BibTeX Key',
  'authors' => 'Authors',
  'year' => 'Year',
  'title' => 'Title',
  'hint_tag_create' => 'When creating a new tag, please provide a translation of the name to all supported languages.',
  'new_tag' => 'New/Edit Tag',
  'tag_name' => 'Tag name',
  'tags_hint' => 'Tags are used to group together different datasets and images.',
  'create_tag' => 'Create Tag',
  'token_help' => 'Use the following token in the authentication field for any connected API.',
  'reset_token_help' => 'Use the button below to reset your API token if it has been stolen, exposed or you suspect it\'s been compromised. This will immediately cause all requests done with the current token to fail.',
  'categories' => 'Categories',
  'version' => 'Version :version',
  'tag' => 'A modern system for storing and retrieving plant data - floristics, ecology and monitoring',
  'hint_herbaria' => 'This is the acronym used in the Index Herbariorium, which consists of two to six letters. The other fields will be filled in automatically.',
  'created' => 'Resources stored!',
  'location_map' => 'Location map',
  'possible_dupes' => 'Possible duplicates',
  'confirm_person_message' => 'Please check that the new Person you are attempting to insert is not a duplicate of the following stored people. If you are certain that this record is of a new person, and not a duplicate, press the button below to finish the insertion.',
  'location_map_error' => 'Error loading the map for this location...',
  'simplified_map' => 'This map was simplified for display...',
  'hint_taxon_name' => 'Enter the full name of the taxon, including subspecies or variety, but without author. Ex: "Licaria cannella subsp. tenuicarpa"',
  'mobot_not_found' => 'This name was not found on MOBOT servers',
  'ipni_not_found' => 'This name was not found on IPNI servers.',
  'project_admin_required_error' => 'At least one administrator must be registered for this project',
  'isvalid' => 'Valid',
  'notvalid' => 'Invalid',
  'juniors' => 'Junior names',
  'accepted_name' => 'Accepted name',
  'hint_mobot_key' => 'You may enter here the identification number of this taxon on the external sites. Most of the times, this will be auto-filled for you.',
  'collector' => 'Collector',
  'welcome_message' => 'Welcome to OpenDataBio! This database has data about :nplants plants and :nvouchers herbarium samples right now.',
  'translations' => 'Translations',
  'create_measurement' => 'Create measurement',
  'autodetect' => 'Autodetect parent',
  'autodetect_error' => 'Unable to autodetect!',
  'value_out_of_range' => 'The informed value is out of range for this trait!',
  'category_order' => 'Category order',
  'add_category' => 'Add category',
  'create_location' => 'Create Location',
  'create_taxon' => 'Create Taxon',
  'create_plant' => 'Create Plant',
  'create_voucher' => 'Create Herbarium Sample',
  'measurement_measurer' => 'Measurer',
  'collector_and_number' => 'Collector and number',
  'voucher_parent_missing_error' => 'Error: parent missing from database!',
  'geom_duplicate' => 'The exact latitude/longitude is already registered in the database',
  'inserting' => 'Inserting',
  'confirm_location' => 'Confirm location',
  'confirm_location_message' => 'The informed position for this new location is very close to these other registered plots or points. Please check that this is indeed a different location',
  'link_type' => 'Link type',
  'hint_trait_link_type' => 'What type of object should be linked in this measure? For instance, if the trait is "Herbivore species", the link type should be "Taxon"',
  'link' => 'Link',
  'optional' => 'Optional',
  'voucher_list' => 'Herbarium samples list',
  'plant_list' => 'Marked plants list',
  'voucher_list_for' => 'Samples list for',
  'plant_list_for' => 'Plants list for',
  'measurements_for' => 'Measurements for',
  'access_level' => 'Access Level',
  'noresults' => 'No results',
  'revisionable_nothing' => '-blank-',
  'revisionable_unknown' => '-unknown-',
  'see_history' => 'History',
  'registered_history' => 'Registered history',
  'history_hint' => 'This table shows the history for the selected object. Here, you can see who edited this resource, when, and what were the changes made.',
  'when' => 'When',
  'user' => 'User',
  'field' => 'Field',
  'old_value' => 'Old value',
  'new_value' => 'New value',
  'no_default_person' => 'You don\'t have a default person associated with your account yet. Select one',
  'here' => 'here',
  'your_default_person' => 'Your default person'
);
