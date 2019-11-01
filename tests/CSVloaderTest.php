<?php

namespace bagduch\blackpepper\Test;

use bagduch\blackpepper\Csvloader;

class CSVloaderTest extends \PHPUnit_Framework_TestCase
{
    public function testNewInstance()
    {
        try {
            $loader = $loader = new Csvloader('storage');
        } catch (\Exception $e) {
            $this->assertEquals('CSV Load Failed', $e->getMessage());
        }
    }

}
