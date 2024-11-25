<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        echo 'index';
    }

    public function about(){
        echo 'About';
    }
    public function mostrarValor($valor){
        echo "Valor envidado pela rota é $valor";
    }
    public function mostrarValores($valor1, $valor2){
        echo "Os valores emviados pela rota é Valor1 = $valor1 e Valor2 = $valor2";
    }
    public function mostrarValores2(Request $request, $valor1, $valor2){
        echo "Os valores emviados pela rota é Valor1 = $valor1 e Valor2 = $valor2";
    }

    public function mostrarValorOpcional($valor = null){
        echo 'Valor opicional é '. $valor;
    }
    public function mostrarValorOpcional2($valor1, $valor2 = null){
        echo 'Valor obrigatório é = '. $valor1.', o opicional é = '.$valor2;
    }
    public function mostrarPosts($user_id, $post_id){
        echo 'Post do usuario ID = '. $user_id.' e o post com ID = '.$post_id;
    }
}
