<?php
/**
 *
 * @category      module
 * @package       moduleone
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
    'id'          => 'oemoduleone',
    'title'       => array(
        'de' => '[TR - OE Module One]',
        'en' => 'OE Module One',
    ),
    'description' => array(
        'de' => '[TR - OE Module One Module]',
        'en' => 'OE Module One Module',
    ),
    'thumbnail'   => 'out/pictures/picture.png',
    'version'     => '1.0.0',
    'author'      => 'John Doe',
    'url'         => 'www.johndoe.com',
    'email'       => 'john@doe.com',
    'extend'      => array(
        'newclass'           => 'oe/moduleone/application/controller/oemoduleonenewclass',
        NewClassModel::class => 'oe/moduleone/application/model/oemoduleonenewclassmodel',
    ),
    'files'       => array(
        'oemoduleonemodule' => 'oe/moduleone/core/oemoduleonemodule.php',
    ),
    'templates'   => array(),
    'blocks'      => array(),
    'settings'    => array(),
    'events'      => array(
        'onActivate'   => 'oeModuleOneModule::onActivate',
        'onDeactivate' => 'oeModuleOneModule::onDeactivate',
    ),
);
