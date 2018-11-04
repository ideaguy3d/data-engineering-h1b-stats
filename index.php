<?php
/**
 * Created by PhpStorm.
 * User: Julius Alvarado
 * Date: 11/3/2018
 * Time: 4:24 PM
 */

$csvInputFolder = ".\input";

require __DIR__ . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";

$h1b = new \h1b\H1BStats();

$h1b->top10calculate($csvInputFolder);