<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
    protected $table='expediente';

    public static function buscar($num,$cod,$anio)
    {
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
      $expe=\DB::select($sql,$parametros);
      //como retorna un array verifico que retorne almenos un elemento
      //para retornar el primero sino retorna null
      if(count($expe) > 0)
      {
        return $expe[0];
      }
      else
      {
        return null;
      } //if(count($expe) > 0){
    } //public static function buscar($num,$cod,$anio){
} //class Expediente extends Model
