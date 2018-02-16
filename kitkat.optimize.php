<?php
/**
 * This file is a part of KitKat Database Management.
 *
 * @link    <https://github.com/obozaxy/KitKat-Database-Management> Github Repository.
 * @license <https://github.com/obozaxy/KitKat-Database-Management/blob/master/LICENSE> Apache-2.0
 */
define('KITKAT_VERSION', '1.0.0');
define('KITKAT_DATABASE_MANAGEMENT', true);
/**
 * pre-script boot.
 */
//-----------------------------//
/* No pre-script boot needed   */
/* Define the functions        */
//-----------------------------//
/* GLOBAL FUNCTIONS FOR KITKAT */
//-----------------------------//
/**
 * initializeKitKat($debug, $logger).
 *
 * @param object $debug  The debugging class.
 * @param object $logger The logging class.
 *
 * @return void.
 */
function initializeKitKat($debug = null, $logger = null): void
{
    $baseStructure = new Obozaxy\KitKat\Optimize($debug, $logger);
    Obozaxy\KitKat\BaseDatabaseStructure::setPreConfig($baseStructure, [
        'kitkat_initialized' => true,
        'stable_channel' => true
    ]);
}
//-------------------//
/* SEPERATE FUNCTION */
//-------------------//
if (!function_exists('convertfso'))
{
    /**
     * convertfso(string $str).
     *
     * @param string $str The string being converted.
     *
     * @return string The converted string.
     */
    function convertfso(string $str): string
    {
        return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    }
}
//-------------------//
/* SEPERATE FUNCTION */
//-------------------//
/**
 * check_pgsql().
 *
 * @return void.
 */
function check_pgsql(): void
{
    if (!extension_loaded('pdo_pgsql'))
    {
        trigger_error(
            convertfso('You can not use the pgsql driver as the extension is not loaded.'),
            E_USER_ERROR
        );
    }
}
//-------------------//
/* SEPERATE FUNCTION */
//-------------------//
/**
 * check_oci().
 *
 * @return void.
 */
function check_oci(): void
{
    if (!extension_loaded('pdo_oci'))
    {
        trigger_error(
            convertfso('You can not use the oracle driver as the extension is not loaded.'),
            E_USER_ERROR
        );
    }
}
//-------------------//
/* SEPERATE FUNCTION */
//-------------------//
/**
 * check_mysql().
 *
 * @return void.
 */
function check_mysql(): void
{
    if (!extension_loaded('pdo_mysql'))
    {
        trigger_error(
            convertfso('You can not use the mysql driver as the extension is not loaded.'),
            E_USER_ERROR
        );
    }
}
//-------------------//
/* SEPERATE FUNCTION */
//-------------------//
/**
 * check_sqlite().
 *
 * @return void.
 */
function check_sqlite(): void
{
    if (!extension_loaded('pdo_sqlite'))
    {
        trigger_error(
            convertfso('You can not use the sqlite driver as the extension is not loaded.'),
            E_USER_ERROR
        );
    }
}
//-------------------------------------------//
/* NO NEED TO CHECK THE ACTUAL PDO EXTENSION */
//-------------------------------------------//
