<?php

class TestA {
    public function test()
    {
        echo 'TestA - test';
    }
}


$a = 'aaaaaaaaaaaaa';
$b = 'bbbbbbbbbbbbbb';
$c = 'ccccccccccccc';

$d = $a . $b. $c;

echo 'ver1.2.1';
echo $d;

$ta = new TestA();
$ta->test();