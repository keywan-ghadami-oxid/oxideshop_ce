<?php
/**
 *
 * @category      module
 * @package       moduletwo
 * @author        John Doe
 * @link          www.johndoe.com
 * @copyright (C) John Doe 20162016
 */

use OxidEsales\EshopAllVersions\Application\Model\NewClassModel;


/**
 * Metadata version
 */
$sMetadataVersion = '1.1';

/**
 * Module information
 */
$aModule = array(
    'id'          => 'oemoduletwo',
    'title'       => array(
        'de' => '[TR - OE Module Two]',
        'en' => 'OE Module Two',
    ),
    'description' => array(
        'de' => '[TR - OE Module Two Module]',
        'en' => 'OE Module Two Module',
    ),
    'thumbnail'   => 'out/pictures/picture.png',
    'version'     => '1.0.0',
    'author'      => 'John Doe',
    'url'         => 'www.johndoe.com',
    'email'       => 'john@doe.com',
    'extend'      => array(
        'newclass' => 'oe/moduletwo/application/controller/oemoduletwonewclass',
        // Todo The aim is to be able to NewClassModel::class => 'oe/moduletwo/application/model/oemoduletwonewclassmodel';
        'newclassmodel' => 'oe/moduletwo/application/model/oemoduletwonewclassmodel',
    ),
    'files'       => array(
        'oemoduletwomodule' => 'oe/moduletwo/core/oemoduletwomodule.php',
    ),
    'templates'   => array(),
    'blocks'      => array(),
    'settings'    => array(),
    'events'      => array(
        'onActivate'   => 'oeModuleTwoModule::onActivate',
        'onDeactivate' => 'oeModuleTwoModule::onDeactivate',
    ),
);
