<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
    public function cleanUpperCaseString($string):string
    {
        //remover espaços em branco no inicio e fim de uma string
        //conver a string para upper case
        return strtoupper(trim($string));
    }
}
