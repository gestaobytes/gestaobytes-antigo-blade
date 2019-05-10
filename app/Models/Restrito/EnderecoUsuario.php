<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EnderecoUsuario extends Model   {
    
    use SoftDeletes;

    protected $table = 'enderecos_usuarios';
    protected $primaryKey = 'ENDUSER_CODIGO';
    protected $fillable = [ 'user_id', 'END_CODIGO', ];
    
    public $rules = [
        'END_CODIGO' => 'required|numeric',
        'user_id' => 'required|numeric',
    ];

}
