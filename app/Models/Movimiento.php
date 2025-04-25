<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Movimiento
 *
 * @property $id
 * @property $producto_id
 * @property $tipo
 * @property $cantidad
 * @property $motivo
 * @property $created_at
 * @property $updated_at
 *
 * @property Producto $producto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Movimiento extends Model
{
    
    static $rules = [
      'producto_id' => 'required|exists:productos,id',
      'tipo' => 'required|in:entrada,salida,ajuste',
      'cantidad' => 'required|integer|min:1',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['producto_id','tipo','cantidad','motivo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'id', 'producto_id');
    }
    

}
