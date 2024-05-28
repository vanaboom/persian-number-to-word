<?php

use Apachish\PersianNumberToWords\Dictionary;
use Apachish\PersianNumberToWords\PersianNumberToWords;

$instance = new PersianNumberToWords(new Dictionary());

$testArray = \Apachish\PersianNumberToWords\Tests\TestArray::TESTS;

foreach ($testArray as $index => $testItem) {
    it("assert converts {$testItem[0]} to string with no errors")
        ->assertEquals($testItem[1], $instance->convert($testItem[0]));
}

