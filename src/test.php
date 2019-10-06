<?php

class TestA {
    public function test()
    {
        echo 'TestA - test';
    }
    public function test2()
    {
        echo 'TestA - test22222222222225555555556666777776888999999000000009999';
    }
}


$a = 'aaaaaaaaaaaaa';
$b = 'bbbbbbbbbbbbbb';
$c = 'ccccccccccccc11111112222222';

$d = $a . $b. $c;

echo 'ver1.2.1';
echo $d;

$ta = new TestA();
$ta->test();