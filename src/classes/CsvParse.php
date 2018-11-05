<?php
/**
 * Created by PhpStorm.
 * User: Julius Alvarado
 * Date: 11/3/2018
 * Time: 4:26 PM
 */

namespace h1b;

use h1b\interfaces\ICsvParse;

class CsvParse implements ICsvParse
{
    public static function csv2generator(string $filePath): \Generator {
        $handle = fopen($filePath, 'r');

        while (!feof($handle)) {
            yield fgetcsv($handle, 0, ";");
        }

        echo "\n.\n.\n. __>> Done Generating over data set.\n.\n.\n.";
        fclose($handle);
    }

    public static function csv2iterator(string $filePath): void {

    }
}