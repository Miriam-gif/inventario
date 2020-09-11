<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $table = 'registros';
    protected $primaryKey = 'num_codigo';
    public $timestamps = false;
    protected $fillable = ['num_codigo','gestion','area_unidad','titulo_proceso','formato','tomo','total_tomo','total_fojas','num_estantes','bandeja_alfabetica','prioridad_1','tipologia','cod_detalle','descripcion_adjunta','hoja_ruta','fech_inicio','fojas','original','copia','legalizado','fotocopia','observacion'];
    

}
