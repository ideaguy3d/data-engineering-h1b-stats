<?php
/**
 * Created by PhpStorm.
 * User: Julius Alvarado
 * Date: 11/3/2018
 * Time: 6:19 PM
 */

namespace h1b;

use h1b\CsvParse;
use h1b\interfaces\IH1BStats;

class H1BStats implements IH1BStats
{
    public function __construct() {}

    public function top10calculate(string $folderPath): void {
        $filePath = glob($folderPath . "\*.csv")[0];

        foreach (CsvParse::csv2generator($filePath) as $record) {
            var_dump($record);
            $break = "point";
        }
    }

    public function readInputFile(string $folderPath): void {

    }

    public function calculateTop10Occupations(): void {

    }

    public function calculateTop10States(): void {
        
    }

    public function writeOutputFile(): void {
        
    }
}