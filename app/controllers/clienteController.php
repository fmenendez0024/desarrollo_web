<?php

namespace App\Controllers;

// use CodeIgniter\Controller;
use App\Models\cliente;
use Doctrine\DBAL\Query;

class clienteController extends Controller {

    public function index()
    {
        // podemos acceder a todos los registros usan metodo GET
        $datosCliente= cliente::all();
        response()->json($datosCliente);
    }
    public function consultar($id_cliente)
    {
        // podemos consultar a todos los registros por id usando metodo GET
        $datosCliente= cliente::find($id_cliente);
        response()->json($datosCliente);
    }
    public function consultar_factura($numero_factura)
    {
        $datosCliente= cliente::where('numero_factura', $numero_factura)->get();
        // response()->json($datosCliente);
        if ($datosCliente) {
            return response()->json($datosCliente);
        } else {
            return response()->json(['error' => 'Factura no encontrada'], 404);
        }
    }
    public function consultar_estado($estado_civil)
    {
        $datosCliente= cliente::where('estado_civil', $estado_civil)->get();
        // response()->json($datosCliente);
        if ($datosCliente) {
            return response()->json($datosCliente);
        } else {
            return response()->json(['error' => 'Estado no encontrada'], 404);
        }
    }
}