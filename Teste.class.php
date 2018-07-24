<?php
/**
 * Created by PhpStorm.
 * User: Fabio HD 2
 * Date: 23/07/2018
 * Time: 23:15
 */

class Teste
{

    public $n1;
    public $n2;

    function Teste($n1,$n2){
        $this->n1 = $n1;
        $this->n2 = $n2;
    }

    public function somar(){
        $res = $this->n1 + $this->n2;
        return $res;
    }

}