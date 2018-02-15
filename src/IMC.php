<?php
namespace lucassantos;

/**
 * Imc
 * A classe Imc é responsável por calcular o IMC de uma pessoa,
 * com base em seu peso e altura informado.
 * 
 * @author Lucas Ferreira dos Santos <lucasferreira241@gmail.com>
 */

class IMC
{    
   /**
    * CalculaIMC())
    * 
    * Calcula o IMC com base no peso e altura
    * 
    * @param float $weight Peso informado
    * @param float $height Altura informada
    * @return string Diagnóstico verificado de acordo com o IMC
    */

    public function calculaIMC(float $weight ,float $height):String
    {
        if ($weight && $height) {
            $imc = round($weight/($height * $height),2);
            return $this->analiseIMC($imc);
        }
            return "Não foi possível calcular";
    }
   /**
    * analiseIMC()
    * 
    * Analisa o imc de acordo com os valores calculados
    * 
    * @param float $imc valor do imc calculado
    * @return string Diagnóstico verificado de acordo com o IMC
    */

    private function analiseIMC($imc):String
    {
        if ($imc <= 17) {
            return "Muito abaixo do peso seu imc é ".$imc;
        } else if ($imc <= 18.49) {
            return "Abaixo do peso seu imc é ".$imc;
        } else if ($imc <= 24.99) {
            return "Peso normal seu imc é ".$imc;
        } else if ($imc <= 29.99) {
            return "Acima do peso seu imc é ".$imc;
        } else if ($imc <= 34.99) {
            return "Obesidade I seu imc é ".$imc;
        } else if ($imc <= 39.99) {
            return "Obesidade II (severa) seu imc é ".$imc;
        } 
        return "Obesidade III (mórbida) seu imc é ".$imc;
    }
}
