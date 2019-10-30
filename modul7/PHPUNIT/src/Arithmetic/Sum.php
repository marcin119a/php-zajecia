<?php
namespace Szkolenie\Arithmetic;

class Sum {
    public $a;
    public $b;

    public function  __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    function result(){
        return $this->a + $this->b;
    }
}