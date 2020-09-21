<?php

class operaciones{
    //funcion para sumar los valores ingresados en la calculadora
    public function sumar($valor1,$valor2){
        $suma= $valor1+$valor2;
        return $suma;
    }
    //funcion para restar los valores ingresados en la calculadora
    public function restar($valor1,$valor2){
        $resta= $valor1-$valor2;
        return $resta;
    }
    //funcion para multiplicar los valores ingresados en la calculadora
    public function multiplicar($valor1,$valor2){
        $multiplicacion= $valor1*$valor2;
        return $multiplicacion;
    }
    //funcion para dividir los valores ingresados en la calculadora
    public function dividir($valor1,$valor2){
        $division= $valor1/$valor2;
        return $division;
    }
}
?>