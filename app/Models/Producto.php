<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $codigo
 * @property $precio
 * @property $cantidad_inicial
 * @property $stock_actual
 * @property $stock_minimo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'codigo' => 'required',
		'precio' => 'required',
		'cantidad_inicial' => 'required',
		'stock_actual' => 'required',
		'stock_minimo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','descripcion','codigo','precio','cantidad_inicial','stock_actual','stock_minimo'];



}
