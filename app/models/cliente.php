<?php

namespace App\Models;
// use Illuminate\Database\Eloquent\Model;
class cliente extends Model
{
    protected $table='cliente';
    protected $primaryKey = 'id_cliente'; // Nombre de la clave primaria
    // public $timestamps = true; // Si la tabla tiene columnas `created_at` y `updated_at`
    protected $fillable = [
        'numero_factura', 
        'nombres', 
        'direccion', 
        'telefono', 
        'correo_electronico', 
        'sexo', 
        'estado_civil'
    ];
}