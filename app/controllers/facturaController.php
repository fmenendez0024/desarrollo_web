<?php

namespace App\Controllers;

// use CodeIgniter\Controller;
use App\Models\factura;
use Doctrine\DBAL\Query;

class facturaController extends Controller {

    public function index()
    {
        // podemos acceder a todos los registros usan metodo GET
        $datosFactura= factura::all();
        response()->json($datosFactura);
    }
}