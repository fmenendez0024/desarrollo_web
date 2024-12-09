<?php

app()->get('/', function () {
    response()->json(['message' => 'Desarrollo de Aplicaciones Web']);
});

app()->get('/datos', function () {
    response()->json(['message' => 'Aplicaciones Web']);
});
// app()->get('/factura', function () {
//     // response()->json(['message' => 'Esta es mi base de datos']);
// });

// consultar todos losd registros metodo GET
app()->get('/cliente', 'clienteController@index' );

// consultar los registros por id metodo GET
app()->get('/cliente/{id_cliente}', 'clienteController@consultar' );

// consultar los registros de factura metodo GET
app()->get('/cliente/consultar_factura/{numero_factura}', 'clienteController@consultar_factura' );

// consultar los registros por estado civil metodo GET
app()->get('/cliente/estado/{estado_civil}', 'clienteController@consultar_estado' );

// agregar registros nuevos a la base de datos metodo POST
app()->post('/cliente', 'clienteController@agregar' );

app()->get('/factura', 'facturaController@index' );

