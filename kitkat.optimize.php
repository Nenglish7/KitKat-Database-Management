<?php
declare(strict_types=1);
/**
 * This file is a part of KitKat Database Management.
 *
 * @link    <https://github.com/obozaxy/KitKat-Database-Management> Github Repository.
 * @license <https://github.com/obozaxy/KitKat-Database-Management/blob/master/LICENSE> Apache-2.0
 */
define('KITKAT_VERSION', '1.0.0');
define('KITKAT_DATABASE_MANAGEMENT', true);
/**
 * initializeKitKat(array $linkConfig = [], $debug = null, $logger = null).
 *
 * @param array  $linkConfig|[] The config array.
 * @param object $debug|null    The debugging class.
 * @param object $logger|null   The logging class.
 *
 * @return void.
 */
function initializeKitKat(array $linkConfig = [], $debug = null, $logger = null): void
{
    $baseStructure = new Obozaxy\KitKat\Optimize($debug, $logger);
    Obozaxy\KitKat\BaseDatabaseStructure::setPreConfig($baseStructure, [
        'db_link_config' => $configArray
    ]);
}
/**
 * addKitKat(array $linkConfig = [], $debug = null, $logger = null).
 *
 * @param array $linkConfig|[] The config array.
 * @param mixed $debug|null    The debugging class.
 * @param mixed $logger|null   The logging class.
 *
 * @throws RuntimeException If there is no connection present.
 *
 * @return void.
 */
function addKitKat(array $linkConfig = [], $debug = null, $logger = null): void
{
    if (!Obozaxy\KitKat\StatusControl::isLinked())
    {
        throw new Obozaxy\KitKat\Exception\RuntimeException('There is no connection present.');
    }
    $baseStructure = new Obozaxy\KitKat\Optimize($debug, $logger, [
        'use_same_debugger' => !$debug ? false : true,
        'use_same_logger' => !$logger ? false : true
    ]);
    Obozaxy\KitKat\BaseDatabaseStructure::setPreConfig($baseStructure, [
        'db_link_config' => $configArray,
        'new_link' => true
    ]);
}
