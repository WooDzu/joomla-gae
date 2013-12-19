<?php

// GAE requires this function call in order to load the local xml files
libxml_disable_entity_loader(false);

// Set the base directory path
define('SET_JPATH_BASE', 'JOOMLACMSADMINDIR');
define('_JEXEC', 1);

// Load defined constants for Joomla under GAE
require_once(__DIR__ . '/defines.php');

// Load and initialize Joomla CMS Admin framework
require_once JPATH_BASE . '/includes/framework.php';

// Add Installation prefix in case we have to over-ride any classes
// By setting prepend to true, we force our directory to be checked first
JLoader::registerPrefix('J', GAEJOOMLALIBS, false, true);

//Some file checks are relative to the current working directory, so set to where it would normally be
chdir (JOOMLACMSADMINDIR);

// Execute install file
require_once(JOOMLACMSADMINFILE);