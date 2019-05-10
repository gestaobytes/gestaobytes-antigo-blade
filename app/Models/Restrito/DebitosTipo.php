<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DebitosTipo extends Model
{

    use SoftDeletes;

    protected $table = 'tipos_debitos';
    protected $primaryKey = 'TD_CODIGO';
    protected $fillable = ['TD_DESCRICAO']; //ESPECIFICO EM QUAIS CAMPOS PODEM SER GRAVADOS

    public $rules = [
        'TD_DESCRICAO' => 'required|min:5|max:120',
    ];
}
