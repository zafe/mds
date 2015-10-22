<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
    protected $table='expediente';

    public static function buscar($num,$cod,$anio){
      $parametros=[
        'codigo' => $cod,
        'anio' => $anio,
        'numero' => $num
        ];
      $sql='
        select *
        from expediente
        where
            expcod = :codigo
            and  expanio = :anio
            and  expnum = :numero
        ';
      return \DB::select($sql,$parametros);
    }
}
