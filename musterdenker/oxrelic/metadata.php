<?php
/**
 * Metadata version
 */
$sMetadataVersion = '0.9';
 
/**
 * Module information
 */
$aModule = array(
    'id'           => 'mude_oxrelic',
    'title'        => 'New Relic for OXID',
    'description'  => array(
        'de' => 'Integriert den OXID eShop in New Relic.',
        'en' => 'Integrates OXID eShop into New Relic',
    ),
    'thumbnail'    => 'logo.jpg',
    'version'      => '0.1',
    'author'       => 'Musterdenker - Mathias Fiedler',
    'url'          => 'http://www.musterdenker.de',
    'email'        => 'mathias@musterdenker.de',
    'extend'       => array(
        'oxshopcontrol' => 'musterdenker/oxrelic/core/mude_oxrelic_oxshopcontrol',
        'oxwidgetcontrol' => 'musterdenker/oxrelic/core/mude_oxrelic_oxwidgetcontrol'
    ),
    'files' => array(
        'mude_oxrelic' => 'musterdenker/oxrelic/core/mude_oxrelic.php'
    ),
    'templates' => array(

    ),
    'events'       => array(
       
    ),
    'blocks' => array(
        
    ),
   'settings' => array(
        array('group' => 'main', 'name' => 'sMudeOxrelicAppName', 'type' => 'str',  'value' => 'OXID eShop'),
        array('group' => 'main', 'name' => 'sMudeOxrelicLicence', 'type' => 'str',  'value' => ''),
        array('group' => 'main', 'name' => 'blMudeOxrelicIgnoreAdmin', 'type' => 'bool',  'value' => false),
    )
);