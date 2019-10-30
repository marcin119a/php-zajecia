<?php
interface FiguraGemoetrycznaInterface {
    public function oblicz_pole();
}
class Prostokat implements FiguraGemoetrycznaInterface {
    public  $a = 0;
    public  $b = 0;
    // @TODO: dopisz sensowny konsturktor (oznacza to tyle a > 0, b > 0
    public function __construct($a, $b){
        if ($a > 0 && $b > 0) {
            $this->a = $a;
            $this->b = $b;
        }
    }

    public function oblicz_pole() {
        return $this->a * $this->b;
    }
}

class Okrag implements FiguraGemoetrycznaInterface {
    public function oblicz_pole()
    {
        // @TODO: Implement oblicz_pole() method.
    }
}