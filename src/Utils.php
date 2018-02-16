<?php
declare(strict_types=1);
/**
 * This file is a part of kitkat database management.
 *
 * @author Nicholas English <nenglish0820@outlook.com>.
 *
 * @link    <https://github.com/obozaxy/KitKat-Database-Management> Github repository.
 * @license <https://github.com/obozaxy/KitKat-Database-Management/blob/master/LICENSE> Apache-2.0 license.
 */

namespace Obozaxy\KitKat;

/**
 * Utils.
 */
class Utils
{
    
    /**
     * Get the list of supported database drivers.
     *
     * @return array An array of the supported database
     *               drivers.
     *
     * @codeCoverageIgnore
     */
    public static function getDrivers()
    {
        return [
            'mysql',
            'pgsql',
            'oracle',
            'sqlite'
        ];
    }
  
}
