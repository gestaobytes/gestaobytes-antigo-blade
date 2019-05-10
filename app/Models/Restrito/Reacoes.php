<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reacoes extends Model {

    use SoftDeletes;

    protected $table = 'reacoes';
    protected $primaryKey = 'REA_CODIGO';
    protected $fillable = ['REA_SLUG', 'REA_EMOCTION', 'REA_STATUS'];
    
    public $rules = [
        'REA_SLUG' => 'required|min:4|max:20|unique:reacoes,REA_SLUG,((ID{?})),REA_CODIGO',
        'REA_EMOCTION' => 'max:20',
        'REA_STATUS' => 'required|max:20',
    ];

}
