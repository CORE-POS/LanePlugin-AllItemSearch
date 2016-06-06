<?php

use COREPOS\pos\lib\FormLib;

class Test extends PHPUnit_Framework_TestCase
{
    public function testPlugin()
    {
        $obj = new AllItemSearch();
    }

    public function testSearch()
    {
        $res = array('upc'=>'1234', 'description'=>1, 'normal_price'=>1, 'special_price'=>1, 'scale'=>1);
        SQLManager::addResult($res);

        $search = new AllItemProductSearch();
        $matches = $search->search('FOO');
        $this->assertEquals(array('1234'=>$res), $matches);
    }
}

