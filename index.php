<?php

trait calculaor {
    public function sum($a, $b) {
  return $a + $b;
}

public function sub($a, $b) {
  return $a - $b;
}

public function mul($a, $b) {
  return $a * $b;
}

public function div($a, $b) {
  return $a / $b;
}

public function sqr($a){
  return sqrt($numero);
}
}

class Rettangolo {
    use calculaor;

    private $base;
    private $altezza;

    public function __construct($base, $altezza) {
        $this->base = $base;
        $this->altezza = $altezza;
    }

    public function area() {
        return $this->mul($this->base, $this->altezza);
    }

    public function perimetro() {
        return $this->mul(2, $this->sum($this->base, $this->altezza));
    }

    public function diagonal() {
        return $this->sqr($this->sum($this->sqr($this->base), $this->sqr($this->altezza)));
    }
}