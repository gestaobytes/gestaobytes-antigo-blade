<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comentarios extends Model {
    
    use SoftDeletes;

    protected $table = 'comentarios';
    protected $primaryKey = 'COM_CODIGO';
    protected $fillable = ['user_id','COM_COM_CODIGO' ,'PROJ_CODIGO', 'COM_TEXTO', 'COM_VISIVELAOCLIENTE'];
    
    public $rules = [
        'user_id' => 'required|numeric',
        'PROJ_CODIGO' => 'required|numeric',
        'COM_COM_CODIGO' => 'numeric',
        'COM_TEXTO' => 'required',
        'COM_VISIVELAOCLIENTE' => 'max:3',
    ];

}
