<?php

class TestA {
    public function test()
    {
        echo 'TestA - test';
    }
    public function test2()
    {
        echo 'TestA - test';
    }
}


$a = 'aaaaaaaaaaaaa';
$b = 'bbbbbbbbbbbbbb';
$c = 'ccccccccccccc1111111';

$d = $a . $b. $c;

echo 'ver1.2.1';
echo $d;

$ta = new TestA();
$ta->test();