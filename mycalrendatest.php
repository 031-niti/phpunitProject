<?php declare(strict_types=1);
include "MyCalrenda.php";
use PHPUnit\Framework\TestCase;

class MyCalrendaTest extends TestCase {
    public function testCheckDayNameOfDate(){
        $cl = new myCalrenda();
        $this->assertEquals ("Wednesday" ,$cl->checkDayNameOfDate("15","03"));
    } 
}