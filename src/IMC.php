<?php
namespace lucassantos;

class IMC{
    public function calculaIMC(float $weight ,float $height):String{
        if($weight && $height){
            $imc = round($weight/($height * $height),2);
            return $this->analisePeso($imc);
        }
            return "Não foi possível calcular";
    }

    private function analisePeso($imc):String{
        if($imc <= 17){
            return "Muito abaixo do peso seu imc é ".$imc;
        } else if($imc <= 18.49){
            return "Abaixo do peso seu imc é ".$imc;
        } else if($imc <= 24.99){
            return "Peso normal seu imc é ".$imc;
        } else if($imc <= 29.99){
            return "Acima do peso seu imc é ".$imc;
        } else if($imc <= 34.99){
            return "Obesidade I seu imc é ".$imc;
        } else if($imc <= 39.99){
            return "Obesidade II (severa) seu imc é ".$imc;
        } 
        return "Obesidade III (mórbida) seu imc é ".$imc;
    }
}
