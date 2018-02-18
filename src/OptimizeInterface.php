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
 * use Obozaxy\Twix\Debugger.
 * use Obozaxy\Snicker\Logger.
 */
use Obozaxy\Twix\Debugger;
use Obozaxy\Snicker\Logger;
/**
 * OptimizeInterface.
 */
interface OptimizeInterface
{
    /**
     * __construct(Debugger $debugger, Logger $logger).
     *
     * @param object|Debugger $debugger The debugger class.
     * @param object|Logger   $logger The logger class.
     *
     * @return void.
     */
    function __construct(Debugger $debugger, Logger $logger);
}
