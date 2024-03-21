<?php
class Math {
    const PI = 3.14;
}

class Number {
    public static $num = 0;
}

class PubStat{
    public static function add($x,$y){
        return $x + $y;
    }
}

print Math::PI . "\n";

Number::$num = 10;
print Number::$num . "\n";

print PubStat::add(2,3);
?>