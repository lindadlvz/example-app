<?php


namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;


class PrimerController extends BaseController
{
    function index(){
        return view('mis-views.primer-view', [
            'texto' => 'Hola Mundo'
        ]);
    }
    function show(Request $request, $texo='nada'){
        $ip = $request ->ip();
        return view('mis-views.primer-view', [
            'texto' => $texto,
            'ip' => $ip
        ]);
    }
}