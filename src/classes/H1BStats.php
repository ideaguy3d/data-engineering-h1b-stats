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
    private $occupationTracker;

    public function __construct() {
        $this->occupationTracker = [];
    }

    public function test1(string $folderPath): void {

    }

    public function top10calculate(string $folderPath): void {
        $filePath = glob($folderPath . "\*.csv")[0];
        $count = 0;

        foreach (CsvParse::csv2generator($filePath) as $record) {
            // idx[21] = SOC_CODE

            // if count > 648,000 break, there are worst case 647,853 records
            if ($count > 648000) {
                echo "\n\n\n\n__>> ERROR - count exceeded 648,000... breaking loop \n\n\n\n";
                break;
            }

            var_dump($record);

            echo "\n\n\n\n__>> count = $count\n\n\n\n";

            $count++;
            $break = "point";
        }

        echo "\n\n\n\n\n__PHP 7 HAS FINISHED SCANNING DATA.\n\n";

        $break = "point";
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