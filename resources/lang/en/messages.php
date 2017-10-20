<?php

return array (
  'measurements' => 'Measurements',
  'api_token' => 'API Token',
  'token_help' => 'Use the following token in the authentication field for any connected API.',
  'reset_token_help' => 'Use the button below to reset your API token if it has been stolen, exposed or you suspect it\'s been compromised. This will immediately cause all requests done with the current token to fail.',
  'reset' => 'Reset!',
  'wrong_password' => 'Wrong password!',
  'auxiliary' => 'Others',
  'traits' => 'Traits',
  'traits_hint' => 'Traits are variables that can be measured on plants, vouchers, locations and taxons. A trait definition must be as precise as possible.',
  'unit' => 'Unit',
  'detail' => 'Details',
  'create_trait' => 'New/Edit Trait',
  'trait' => 'Trait',
  'description' => 'Description',
  'range' => 'Range',
  'export_name' => 'Export name',
  'object_types' => 'Object Types',
  'rank' => 'Rank',
  'categories' => 'Categories',
  'hint_trait_create' => 'Here you can create a new trait that can be used to associate measurements to plants, vouchers, taxons or locations. The trait definition must be precise and include the measuring instrument or calculating method. In other words, instead of a trait named "Diversity", as there are several ways of estimating diversity, and use "Shannon Diversity", for instance. Note that after measures have been linked to a trait, it cannot be altered anymore!',
  'new_trait' => 'New / Edit Trait',
  'trait_type_hint' => 'There are currently seven types of traits available in OpenDataBio. Quantitative traits are measured as single numbers, which may be real valued or integer, depending on the type specified. Quantitative traits require the definition of the measuring unit, and may have an associated valid range. Qualitative traits are selected from a list of categories. Qualitative traits in which there is no ordering of categories are called "categorical" (ex: habitat might be "rain forest" or "mangroove"), and you may specificy if a single measurement may associate a single category or more than one. Ordinal traits are qualitative traits in which there is a natural ordering (the trophic class of a lake may be "oligotrophic", "mesotrophic" or "eutrophic"). Text traits may be freely entered by the user, and link traits have an associate object and number (see wiki page).',
  'trait_objects_hint' => 'List here the object types that may have this trait. For example, for a "Diameter" trait, select Plant; for a "Species Richness" trait, select Location. You may choose more than one object type.',
  'range_min' => 'Range Minimum',
  'range_max' => 'Range maximum',
  'trait_export_hint' => 'This name will be used as a label when exporting spreadsheets. It must be unique in the database. Please provide a name that is easy to identify.',
  'hint_trait_unit' => 'In what unit is this trait measured? Common values include day, year, meter, m², m³, individuals, etc.',
  'hint_trait_min' => 'Does this trait have a minimum value? Measurements will be checked against this value and rejected if they are smaller than this.',
  'hint_trait_max' => 'Does this trait have a maximum value? Measurements will be checked against this value and rejected if they are larger than this.',
  'edit_user' => 'Edit User',
  'email' => 'E-mail address',
  'password' => 'Password',
  'password_change_hint' => 'Use this field to force the password for this user to be changed. Leave it blank if you don\'t want to edit it.',
  'save' => 'Save changes',
  'remove_user' => 'Remove User',
  'help' => 'Help!',
  'users_hint' => 'This table represent the system users. Each user has a valid e-mail and password, and an access level, which
        determines the actions he or she may take on the system. This table does not store information about
        plant or voucher collectors or specialists. Use the "Persons" tab for that.',
  'registered_users' => 'Registered Users',
  'locations' => 'Locations',
  'persons' => 'Persons',
  'references' => 'References',
  'herbaria' => 'Herbaria',
  'users' => 'Users',
  'userjobs' => 'Jobs',
  'login' => 'Login',
  'register' => 'Register',
  'edit_profile' => 'Edit profile',
  'references_hint' => 'This table contains the bibliographic references used when incorporating published data to the database.
        All references should be in Bibtex format - all major citation softwares are able to export to Bibtex format.

        Check the "standardize" box if you want to generate standard BibTeX keys for the imported entries. These will
        be used instead of the keys that are present in the files.',
  'import_references' => 'Import References',
  'standardize_keys' => 'Standardize Keys',
  'import_file' => 'Import File',
  'bibliographic_references' => 'Bibliographic References',
  'bibtex_key' => 'BibTeX Key',
  'authors' => 'Authors',
  'year' => 'Year',
  'title' => 'Title',
  'edit_reference' => 'Edit Reference',
  'bibtex_entry' => 'BibTeX entry',
  'remove_reference' => 'Remove Reference',
  'acronym' => 'Acronym',
  'institution' => 'Institution',
  'irn' => 'IRN',
  'hint_herbaria_page' => 'This table contains the registered herbaria in which the vouchers can be stored. All herbaria should have
        an identification number from the Index Herbariorum, which can be used to retrieve other details such as
        address, phone, or e-mail. You can register herbarias using the acronym (also called Herbarium Code), which
        normally consists on two to five letters. All other fields will be filled in automatically.',
  'new_herbarium' => 'Register Herbarium',
  'whoops' => 'Whoops! Something went wrong!',
  'checkih' => 'Check Index Herbariorum',
  'add' => 'Register!',
  'registered_herbaria' => 'Registered Herbaria',
  'details' => 'Details',
  'herbarium' => 'Herbarium',
  'remove_herbarium' => 'Remove Herbarium',
  'specialists' => 'Specialists',
  'abbreviation' => 'Abbreviation',
  'name' => 'Name',
  'userjobs_hint' => 'Jobs are requests that are processed on the background by the server. They are
	mostly used for importing and exporting data. Any user only has access to his/her own jobs.
	The status column indicates: "Submitted" if the job has been submitted, but it\'s still not being processed;
"Processing" if it\'s being processed by the database; "Success" if the execution ended without errors; 
"Failed" if the execution results in error and "Cancelled" if the user has asked the job to be cancelled. You may use
the buttons on the left of the table to attempt to cancel a job that has not finished, retry a job that has failed, or
remove the job information from the database.',
  'registered_userjobs' => 'Your Registered Jobs',
  'id' => 'ID',
  'status' => 'Status',
  'created_at' => 'Created',
  'updated_at' => 'Last updated',
  'actions' => 'Actions',
  'retry' => 'Retry',
  'cancel' => 'Cancel',
  'remove' => 'Remove',
  'monitor_userjob' => 'Monitor Job',
  'jobid' => 'Job ID',
  'type' => 'Type',
  'log' => 'Log',
  'notfound' => 'The item you are trying to see was not found in the database. Maybe you followed an outdated link?',
  'location_hint' => 'This table stores the geographical locations in which plants are collected, and samples are taken.',
  'registered_locations' => 'Registered Locations',
  'location' => 'Location',
  'location_name' => 'Location name',
  'total_descendants' => 'Total descendants',
  'location_ancestors_and_children' => 'Related locations',
  'home' => 'Home',
  'docs' => 'Documentation',
  'remember' => 'Remember me',
  'forgot' => 'Forgot password?',
  'confirm_password' => 'Confirm Password',
  'reset_password' => 'Reset Password',
  'send_password' => 'Send Password Reset Link',
  'current_password' => 'Current Password',
  'new_password' => 'New Password',
  'password_hint' => 'Use this field to change your password. Leave it blank if you don\'t want to edit it.',
  'default_person' => 'Default Person',
  'hint_default_person' => 'If you select a Person here, this will be used as the default Person on all relevant forms, such as when filling in vouchers or plants collected. You should probably set this to your own name.',
  'full_name' => 'Full Name',
  'abbreviation_hint' => 'The abbreviation field is the abbreviated name which the person uses in publications and other
        catalogs. It must contain only uppercase letters, hyphens, periods, commas or spaces. A valid abbreviation for
        the name "Charles Robert Darwin" would be "DARWIN, C. R.".
        When registering a new person, the system suggests the name abbreviation, but the user is free to change
        it to better adapt it to the usual abbreviation used by each person.
        The abbreviation should be unique for each person.',
  'person_herbarium_hint' => 'Fill this if this person is associated with an herbarium. He or she will then be listed as specialist.',
  'person_hint' => 'This table represent people which may or may not be directly involved with the database.
        It is used to store information about plant and voucher collectors, specialists, and database users.
        When registering a new person, the system suggests the name abbreviation, but the user is free to change
        it to better adapt it to the usual abbreviation used by each person.
        The abbreviation should be unique for each person.',
  'new_person' => 'New Person',
  'registered_persons' => 'Registered Persons',
  'edit_person' => 'Edit Person',
  'remove_person' => 'Remove Person',
  'stored' => 'Resources stored!',
  'saved' => 'Resources saved!',
  'fk_error' => 'This resource is associated with other objects and cannot be removed',
  'removed' => 'Resource removed!',
  'acronym_error' => 'You must provide an acronym!',
  'acronym_not_found' => 'Acronym not found or error accessing IH site!',
  'dispatched' => 'Job dispatched! See details on the Jobs tab.',
  'bibtex_error' => 'This file could not be parsed as valid BibTeX!',
  'version' => 'Version :version',
  'tag' => 'A modern system for storing and retrieving plant data - floristics, ecology and monitoring',
  'hint_herbaria' => 'This is the acronym used in the Index Herbariorium, which consists of two to six letters. The other fields will be filled in automatically.',
  'created' => 'Resources stored!',
  'new_location' => 'New/Edit Location',
  'create' => 'Create',
  'adm_level' => 'Administrative level',
  'location_adm_level_hint' => 'Stores the type of the location. Some types are actual administrative levels, related to the legal status of the location (countries, states, provinces, etc). Some are related to the nature of the location (such as a GPS point, or a plot).',
  'geometry' => 'Geometry',
  'geom_hint' => 'Store here the geometry of the location. This field accepts a Well Known Text of a Point, LineString, Polygon or MultiPolygon (such as the WKT that may be exported from a GIS system). NOTE that longitudes should be inserted before latitudes. Thus the WKT \'POINT(-44.0 -22.5 )\' refers to a point at 22 degrees and 30 minutes of latitude south and 44 degrees of longitude west).',
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
  'notes' => 'Notes',
  'position' => 'Position',
  'uc' => 'Conservation Unit',
  'edit' => 'Edit',
  'location_map' => 'Location map',
  'geom_error' => 'The geometry informed is invalid. Check for missing parentheses, extra commas, and verify that the last position in a polygon is equal to the first.',
  'unauthorized' => 'The current user is not authorized to perform this action!',
  'person_details' => 'Person details',
  'bibreference' => 'Bibliographic reference',
  'bibtex_at_error' => 'The BibTex entry must start with an @ sign!',
  'remove_location' => 'Remove Location',
  'confirm_person' => 'Confirm Person insertion',
  'possible_dupes' => 'Possible duplicates',
  'confirm_person_message' => 'Please check that the new Person you are attempting to insert is not a duplicate of the following stored persons. If you are certain that this record is of a new person, not a duplicate, press the button below to finish the insertion.',
  'movenotpossible' => 'Impossible to move node to this parent.',
  'location_map_error' => 'Error loading the map for this location...',
  'simplified_map' => 'This map was simplified for display...',
  'hint_taxon_name' => 'Enter the full name of the taxon, including subspecies or variety, but without author. Ex: "Licaria cannella subsp. tenuicarpa"',
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
  'hint_taxon_create' => 'Use this form to add a new Taxon to the database. After filling the taxon\'s name, the button "Check APIs" may be used to automatically fill most information.',
  'new_taxon' => 'New / Edit taxon',
  'taxon' => 'Taxon',
  'author' => 'Author',
  'level' => 'Level',
  'valid_status' => 'Valid status',
  'taxon_ancestors_and_children' => 'Related taxons',
  'taxons' => 'Taxons',
  'name_error' => 'You need to fill in the name before proceeding',
  'mobot_error' => 'Error accessing MOBOT server',
  'mobot_not_found' => 'This name was not found on MOBOT servers',
  'geom_parent_error' => 'The coordinates for this location do not fall within the specified parent\'s coordinates, please check!',
  'unable_autodetect' => 'Unable to autodetect parent!',
  'privacy' => 'Data Privacy',
  'project_privacy_hint' => 'Select here if the data belonging to this project should be restricted to the users listed as administrators, collaborators or viewers (restricted to authorized users); if the data should be available to all registered users, or if the data can be accessed by everyone.',
  'admins' => 'Administrators',
  'collabs' => 'Collaborators',
  'viewers' => 'Viewers',
  'project_admins_hint' => 'Use these selectors to add users to the administrator, collaborator or viewer lists of this project. Administrator have full control and access, collaborators have limited control, and viewers have read-only access to the project\'s data. Notice that only full users and superadmins may be assigned as project collaborators or admins. Users that are only registered may only be assigned as viewers.',
  'projects_hint' => 'Projects are a way to group together several resources in the database, such as marked plants and vouchers. Each project has a list of administrators, collaborators and viewers. Administrator have full control and access, collaborators have limited control, and viewers have read-only access to the project\'s data.',
  'create_project' => 'New/Edit Project',
  'my_projects' => 'My projects',
  'projects' => 'Projects',
  'members' => 'Members',
  'data_privacy' => 'Data Privacy',
  'new_project' => 'New / Edit Project',
  'project' => 'Project',
  'collaborators' => 'Collaborators',
  'mobot_key' => 'MOBOT id number',
  'ipni_key' => 'IPNI id number',
  'taxon_index_hint' => 'This table stores the taxonomic names in use for this database. Click on any name to see related information, such as parents and descendants. A double asterisk (**) indicates that a name is marked as invalid.',
  'registered_taxons' => 'Registered taxa',
  'specialist_in' => 'Specialist in',
  'person_specialist_hint' => 'Register here the taxons for which this person is a specialist.',
  'taxon_parent_required_error' => 'A parent name is required for all taxons of species or subspecies level.',
  'taxon_parent_genus_error' => 'The parent for a species must be of genus level or similar.',
  'taxon_parent_species_error' => 'The parent name for all subspecies, varieties and forms must be a species.',
  'taxon_parent_level_error' => 'The taxon level indicated is inconsistent with the parent\'s level.',
  'taxon_senior_level_error' => 'The senior indicated is from a taxonomic level too far from this name.',
  'taxon_senior_valid_error' => 'A name must not be marked as valid if it has a senior name.',
  'taxon_senior_invalid_error' => 'The senior name indicated must be valid.',
  'taxon_author_error' => 'You must provide an author name as a string or select one from the dropdown, but not both.',
  'taxon_bibref_error' => 'You must provide a bibliographic reference as a string or select one from the dropdown, but not both.',
  'mobot_multiple_hits' => 'The MOBOT server returned multiple hits for this query. Double check if all information is correct!',
  'mobot_none_synonym' => 'MOBOT servers indicate that this name is invalid, but did not provide a valid synonym!',
  'ipni_error' => 'Error accessing the IPNI servers!',
  'ipni_not_found' => 'This name was not found on IPNI servers.',
  'ipni_multiple_hits' => 'The IPNI server returned multiple hits for this query. Double check if all information is correct!',
  'parent_not_registered' => 'APIs indicate that this name parent should be :name, but this is not registered in the database',
  'senior_not_registered' => 'APIs indicate that this name is a junior synonym of :name, but this name is not registered in the database',
  'project_admin_required_error' => 'At least one administrator must be registered for this project',
  'isvalid' => 'Valid',
  'notvalid' => 'Invalid',
  'juniors' => 'Junior names',
  'accepted_name' => 'Accepted name',
  'hint_mobot_key' => 'You may enter here the identification number of this taxon on the external sites. Most of the times, this will be auto-filled for you.',
  'back' => 'Back',
  'mycobank_key' => 'Mycobank id number',
  'mycobank_error' => 'Error accessing Mycobank server',
  'apis_not_found' => 'This name was not found on the API servers. Check the links on the top of the page for searching directly on their servers.',
  'mycobank_multiple_hits' => 'The Mycobank server returned multiple hits for this query. Double check if all information is correct!',
  'plants_hint' => 'This table lists all marked plants in the database. Each plant is identified by its location and a tag. There can only be one plant with the same tag for the same location.',
  'new_plant' => 'New Plant',
  'plants' => 'Plants',
  'location_and_tag' => 'Location and tag',
  'identification' => 'Identification',
  'unidentified' => 'Unidentified',
  'plant' => 'Plant',
  'identified_by' => 'Identified by',
  'identification_based_on' => 'Identification based on',
  'identification_notes' => 'Identification notes',
  'plant_tag' => 'Plant tag',
  'collection_date' => 'Collection date',
  'tag_date' => 'Tag date',
  'tag_team' => 'Tagging team',
  'collectors' => 'Collectors',
  'collector' => 'Collector',
  'not_registered' => 'Not registered',
  'unknown_date' => '??',
  'plant_location_hint' => 'In which location was this plant collected? If this is a plot, you must also register the relative position.',
  'plant_project_hint' => 'Under which project do you wish to register this plant? This will affect which users will be able to see this register.',
  'plant_date_hint' => 'Register here the date in which the plant was tagged. If the day or month is not known, use the question mark.',
  'relative_position' => 'Relative position',
  'plant_position_hint' => 'Register here the relative coordinates in respect to the plot in which this plant is marked. Make sure to use the same (x,y) coordinates as the plot. If the location given was a GPS point, ignore this field.',
  'plant_collectors_hint' => 'Register here all persons responsible for tagging for this plant. You can choose more than one.',
  'tagged_or_collected' => 'Plants tagged or collected',
  'plant_taxon_hint' => 'Indicate the taxon to which this plant was identified.',
  'modifier' => 'Modifier',
  'plant_modifier_hint' => 'Register here the identification modifier used. s.s. = "sensu strictu", meaning strictly speaking; s.l. = "sensu lato", meaning "broadly"; c.f. = "confer", meaning that the identification is believed to be correct, but is not certain; aff. = "affinis", meaning there is evidence that this is a new species, still undescribed, but related to the given taxon; "vel aff." means "or affinis", which indicates that the plant may be from the indicated taxon or from a related, undescribed species.',
  'identifier' => 'Identifier',
  'plant_identifier_id_hint' => 'Register here the person responsible for the plant identification. This may be one of the collectors, or not.',
  'identification_date' => 'Identification date',
  'plant_identification_date_hint' => 'Register here when the plant was identified with the current taxonomic name.',
  'plant_herbarium_id_hint' => 'Indicate here if the identification was done based on a voucher from a herbarium. If you do so, use the "identification notes" field to indicate the voucher number.',
  'hint_plant_create' => 'Use this form to register a new marked plant.',
  'no_valid_project_error' => 'The logged in user has no valid projects!',
  'invalid_date_error' => 'The date entered is invalid. Note that if the month is marked as unknown, the day must be unknown too.',
  'invalid_identification_date_error' => 'The identification date entered is invalid. Note that if the month is marked as unknown, the day must be unknown too.',
  'date_future_error' => 'The collection date must not be greater than today.',
  'identification_date_future_error' => 'The identification date must not be less than the collection date, and must not be greater than today.',
  'hint_plant_tag' => 'Register here which tag was used to mark this plant. There should be no other plant from this location with the same tag.',
  'vouchers' => 'Vouchers',
  'plants_and_vouchers' => 'Plants and Vouchers',
  'tag_or_number' => 'Tag or Number',
  'main_collector' => 'Main collector',
  'voucher_person_hint' => 'Register here the main person responsible for collecting this voucher. This name will be used to identify this voucher.',
  'voucher_number' => 'Voucher number',
  'hint_voucher_number' => 'This is the sequential number of vouchers collected by the person described as main collector.',
  'additional_collectors' => 'Additional collectors',
  'voucher_collectors_hint' => 'Register here any additional collectors for this voucher.',
  'voucher_date_hint' => 'This is the collection date of the voucher. If the day or month is unknown, use the question marks.',
  'voucher_parent_type' => 'Parent Type',
  'voucher_parent_type_hint' => 'A voucher needs to be associated with a marked Plant, or in case the marked Plant is not available in the database, it can be associated with a Location from which it was collected. Please note that if you associate a voucher to a Location, you must provide the species identification, but if you associate it with a Plant, the identification will be copied from that plant.',
  'parent_location' => 'Location',
  'voucher_parent_location_hint' => 'If the plant from which the voucher was taken is not registered in the database, select here the Location where this voucher was collected',
  'parent_plant' => 'Parent Plant',
  'voucher_parent_plant_hint' => 'If this voucher was taken from a registered plant, register here which plant was it',
  'voucher_project_hint' => 'Register here the project to which this voucher belongs. This is relevant to control who can access and edit data about it',
  'voucher_taxon_hint' => 'Indicate the taxon to which this voucher was identified.',
  'voucher_modifier_hint' => 'Register here the identification modifier used. s.s. = "sensu strictu", meaning strictly speaking; s.l. = "sensu lato", meaning "broadly"; c.f. = "confer", meaning that the identification is believed to be correct, but is not certain; aff. = "affinis", meaning there is evidence that this is a new species, still undescribed, but related to the given taxon; "vel aff." means "or affinis", which indicates that the plant may be from the indicated taxon or from a related, undescribed species.',
  'voucher_identifier_id_hint' => 'Register here the person responsible for identifying this voucher.',
  'voucher_identification_date_hint' => 'This is the identification date of the voucher. If the day or month is unknown, use the question marks.',
  'voucher_herbarium_id_hint' => 'If the identification was based on a herbarium sample, register here the acronym for the herbarium. You will need to provide the number of the sample in the "identification notes" field. NOTE that this field should not be used to register where this voucher was stored, use the table below for that.',
  'herbarium_number' => 'Number at the herbarium',
  'vouchers_hint' => 'This table represent vouchers, which are pressed plant samples deposited for future reference in herbaria.',
  'new_voucher' => 'New / Edit Voucher',
  'hint_voucher_create' => 'In this screen you can register a new collected voucher. A voucher needs to be associated with a marked Plant, or in case the marked Plant is not available in the database, it can be associated with a Location from which it was collected. Please note that if you associate a voucher to a Location, you must provide the species identification, but if you associate it with a Plant, the identification will be copied from that plant. The main identifier of the voucher is the combination of the main collector and a sequential number.',
  'voucher' => 'Voucher',
  'voucher_herbaria' => 'Herbaria',
  'welcome_message' => 'Welcome to OpenDataBio! This database has data about :nplants plants and :nvouchers vouchers right now.',
  'id_herbarium' => 'Id based on herbarium',
  'datasets' => 'Datasets',
  'tags' => 'Tags',
  'tags_hint' => 'Tags are used to group together different datasets and images.',
  'create_tag' => 'New/Edit Tag',
  'hint_tag_create' => 'When creating a new tag, please provide a translation of the name to all supported languages.',
  'new_tag' => 'New/Edit Tag',
  'language' => 'Language',
  'tag_name' => 'Tag name',
  'datasets_hint' => 'Datasets are sets of measurement data. They control the access and permissions for inserting and editing new data to the database.',
  'create_dataset' => 'New/Edit Dataset',
  'my_datasets' => 'My datasets',
  'new_dataset' => 'New/Edit Dataset',
  'dataset_privacy_hint' => 'Select here if the data belonging to this dataset should be restricted to the users listed as administrators, collaborators or viewers (restricted to authorized users); if the data should be available to all registered users, or if the data can be accessed by everyone.',
  'dataset_bibreference' => 'Reference for dataset',
  'dataset_bibreference_hint' => 'Set this field either if the dataset was collected from a bibbliographic reference, or if the data is published.',
  'dataset_admins_hint' => 'Use these selectors to add users to the administrator, collaborator or viewer lists of this dataset. Administrator have full control and access, collaborators have limited control, and viewers have read-only access to the project\'s data. Notice that only full users and superadmins may be assigned as dataset collaborators or admins. Users that are only registered may only be assigned as viewers.',
  'dataset' => 'Dataset',
  'translations' => 'Translations',
  'access_level_change_hint' => 'The access level of a user determines what he or she can do in the system. SuperAdmins have edit access to all data in the system. Full users can be collaborators or admins to projects and datasets, and registered users may only view data that is explicitly shared with them. When you promote a user to Full User or Superadmin, the system will automatically create a workspace for him or her. If you demote a user to Registered User, the system will automatically remove all admin and collaborator access he or she had in projects and datasets.',
  'measurements_hint' => 'The main data in the database, measurements represent any kind of data associated with a Taxon, Plant, Location or Voucher.',
  'new_measurement' => 'New/Edit Measurement',
  'object' => 'Object',
  'value' => 'Value',
  'date' => 'Date',
  'measurement_for' => 'Measurement for',
  'measurement_date' => 'Measurement date',
  'measurement_date_hint' => 'Register the date in which this measurement was done. If the day or month is not known, mark it with ??',
  'measurement_bibreference' => 'Bib Reference for Measurement',
  'measurement_bibreference_hint' => 'If this specific measurement has a bibliographic reference (differing from the Dataset reference), register it here',
  'measurement_person' => 'Person',
  'measurement_person_hint' => 'Register the person responsible for this measurement',
  'measurement_dataset' => 'Dataset',
  'measurement_dataset_hint' => 'In which dataset should this measurement be stored?',
  'measurement' => 'Measurement',
  'person' => 'Person',
  'reference' => 'Reference',
  'create_measurements' => 'New/Edit Measurement',
  'no_valid_dataset_error' => 'The logged in user has no valid datasets!',
  'no_valid_trait_error' => 'There is no trait available for creating measurements. Create a new trait in the Traits menu.',
  'invalid_trait_type_error' => 'The allowed object types for this trait are not compatible with the referenced object.',
  'progress' => 'Progress',
  'autodetect' => 'Autodetect',
  'autodetect_error' => 'Unable to autodetect!',
  'value_out_of_range' => 'The informed value is out of range for this trait!',
  'category_order' => 'Category order',
);
