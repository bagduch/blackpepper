<?php

namespace bagduch\blackpepper\Test;

use bagduch\blackpepper\Company;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
    public function testNewInstance()
    {
        $company = new Company('Nappies Direct', 'http://www.nappies.co.nz/', 'http://www.blackpepper.co.nz/content/test/nappies.png');
        $this->assertEquals('Nappies Direct', $company->getName());
        $this->assertEquals('http://www.nappies.co.nz/', $company->getUrl());
        $this->assertEquals('http://www.blackpepper.co.nz/content/test/nappies.png', $company->getLogo());
    }

    public function testInvalidUrl()
    {
        $numExceptions = 0;
        try {
            new Company('test', 'com', 'http://www.blackpepper.co.nz/content/test/nappies.png');
        } catch (\Exception $e) {
            $this->assertEquals('Invalid company URL format', $e->getMessage());
            $numExceptions++;
        }
        try {
            new Company('test', '.com', 'www.blackpepper.co.nz/content/test/nappies.png');
        } catch (\Exception $e) {
            $this->assertEquals('Invalid company URL format', $e->getMessage());
            $numExceptions++;
        }
        try {
            new Company('test', '1', 'www.blackpepper.co.nz/content/test/nappies.png');
        } catch (\Exception $e) {
            $this->assertEquals('Invalid company URL format', $e->getMessage());
            $numExceptions++;
        }
        $this->assertEquals(3, $numExceptions);
    }

}
