<?php

namespace Test{
    class BLA_BLA{
        public function __construct()
        {
            echo "bla bla wykonane\n";
        }
        public function  __toString() {
            return "to jest obiekt klasy BLA_BLA";
        }
    }
}
namespace {

    use Test\BLA_BLA as Bla;

    $bla = new Bla();
    print($bla);

}