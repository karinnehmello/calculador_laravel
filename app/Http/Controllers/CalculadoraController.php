<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calculadora;

class CalculadoraController extends Controller
{
    public function index() {
        $resultados = Calculadora::get();
        return view('index')->with('resultados', $resultados);
    }

    public function create() {
        return view('formulario');
    }

    public function store(Request $req) {
        $num1 = intval($req->num1);
        $num2 = intval($req->num2);
        $operacao = $req->operacao;
        $resultado = 0;
        switch ($operacao) {
            case '+':
                $resultado = $num1 + $num2;
                break;
            case '-':
                $resultado = $num1 - $num2;
                break;
        } 
        
        $calc = new Calculadora();
        $calc->num1 = $num1;
        $calc->num2 = $num2;
        $calc->operacao = $operacao;
        $calc->resultado = $resultado;
        $calc->save();

        return redirect('/');
    }

}
