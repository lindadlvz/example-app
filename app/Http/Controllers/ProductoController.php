<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
class ProductoController extends BaseController
{
    public function index()
    {
        return view('mis-views.producto');
    }
}
