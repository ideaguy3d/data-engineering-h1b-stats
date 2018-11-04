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
    public function csv2generator(string $filePath): \Generator {
        $handle = fopen($filePath, 'r');

        while(!feof($handle)) {
            yield fgetcsv($handle, 0, ";");
        }

        fclose($handle);
    }
}