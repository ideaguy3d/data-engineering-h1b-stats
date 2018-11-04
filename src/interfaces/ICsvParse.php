<?php
/**
 * Created by PhpStorm.
 * User: Julius Alvarado
 * Date: 11/3/2018
 * Time: 4:38 PM
 */

namespace h1b\interfaces;

interface ICsvParse
{
    /**
     * use a generator to parse CSV files because these files
     * are going to potentially get very large
     *
     * @param $filePath - path to the CSV file
     *
     * @return \Generator
     */
    public static function csv2generator(string $filePath): \Generator;
}