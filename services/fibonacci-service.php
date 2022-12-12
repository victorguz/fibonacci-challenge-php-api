<?php

class Fibonacci
{

    private $position = 1;
    private $primero = "0";
    private $segundo = "1";
    private $ultimo = "1";

    public function calcularConCiclo($n)
    {
        $n = strval($n);
        $this->position = $n;

        for ($i = 2; $i <= $this->position; $i++) {
            $this->ultimo = gmp_add($this->primero, $this->segundo);
            $this->primero = $this->segundo;
            $this->segundo = $this->ultimo;
        }
        return strval($this->ultimo);
    }


    public function resultRelacionRecurrencia($n)
    {
        $this->position = intval($n);
        $sqrt = sqrt(5);
        // $lado1 = bcmul(bcdiv(1, $sqrt), bcpow(bcdiv(bcadd(1, $sqrt), 2), $n));
        // $lado2 = bcmul(bcdiv(1, $sqrt), bcpow(bcdiv(bcsub(1, $sqrt), 2), $n));
        // return bcsub($lado1, $lado2);
        // $lado1 = gmp_mul(gmp_div("1", strval($sqrt)), gmp_pow(gmp_div(gmp_add("1", strval($sqrt)), "2"), strval($n)));
        // $lado2 = gmp_mul(gmp_div("1", strval($sqrt)), gmp_pow(gmp_div(gmp_add("1", strval($sqrt)), "2"), strval($n)));
        // return gmp_strval(gmp_sub($lado1, $lado2));

        $lado1 = (1 / $sqrt) * pow((1 + $sqrt) / 2, $n);
        $lado2 = (1 / $sqrt) * pow((1 - $sqrt) / 2, $n);
        return $lado1 - $lado2;

    }
    public function position()
    {
        return $this->position;
    }

}