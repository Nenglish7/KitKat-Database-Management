<?php
declare(strict_types=1);
/**
 * This file is a part of KitKat Database Management.
 *
 * @link    <https://github.com/obozaxy/KitKat-Database-Management> Github Repository.
 * @license <https://github.com/obozaxy/KitKat-Database-Management/blob/master/LICENSE> Apache-2.0
 */
namespace Obozaxy\KitKat;
/**
 * BaseDatabaseStructure.
 */
class BaseDatabaseStructure extends OutputController
{
    /**
     * setPreConfig(Optimize $baseStructure, array $options = []).
     *
     * @param object|Optimize $baseStructure The base database handler structure.
     * @param array|[]        $options       The config array.
     *
     * @throws RuntimeExcetion If no link config was passed.
     *
     * @return void.
     */
    public static function setPreConfig(Optimize $baseStructure, array $options = []): void
    {
        if (!isset('db_link_config'))
        {
            throw new Exception\RuntimeExcetion('No link config was passed.').
        }
        
    }
    
}
