<?php
/**
 * Created by PhpStorm.
 * User: Julius Alvarado
 * Date: 11/3/2018
 * Time: 6:19 PM
 */

namespace h1b\interfaces;

interface IH1BStats
{
    /**
     * read a ";" separated CSV file into memory using a Generator
     *
     * @param string $folderPath - the path to the folder the CSV is in
     *
     * @return void
     */
    public function readInputFile(string $folderPath): void;

    /**
     * - calculate the top 10 occupations from H1B visa applications
     * - calculate the number of applications that were certified for each of the
     * top 10 visa applications
     * - calculate how much % each occupation is of the total occupations
     *
     * @return void
     */
    public function calculateTop10Occupations(): void;

    /**
     *
     */
    public function calculateTop10States(): void;

    /**
     *
     */
    public function writeOutputFile(): void;
}