<?php
/**
 * Metadata version
 *
 * sudo -u web2 php vendor/bin/oe-console oe:module:install-configuration source/modules/musterdenker/oxrelic/
 * => aktivieren
 * sudo -u web2 php vendor/bin/oe-console oe:module:uninstall-configuration mude_oxrelic
 */
$sMetadataVersion = '1.1';
 
/**
 * Module information
 */
$aModule = array(
    'id'           => 'mude_oxrelic',
    'title'        => [
        'de' => 'New Relic for OXID',
        'en' => 'New Relic for OXID',
    ],
    'description'  => array(
        'de' => 'Integriert den OXID eShop in New Relic.',
        'en' => 'Integrates OXID eShop into New Relic',
    ),
    'thumbnail'    => 'logo.jpg',
    'version'      => '0.2',
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