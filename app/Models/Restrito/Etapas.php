<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Etapas extends Model {
    
    use SoftDeletes;

    protected $table = 'etapas';
    protected $primaryKey = 'ETA_CODIGO';
    protected $fillable = ['ETA_NOME', 'ETA_DESCRICAO'];
    
    public $rules = [
        'ETA_NOME' => 'required|min:5|max:20|unique:etapas,ETA_NOME,((ID{?})),ETA_CODIGO',
        'ETA_DESCRICAO' => 'required|max:255',
    ];

}
