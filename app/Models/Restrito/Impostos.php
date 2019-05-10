<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Impostos extends Model   {
    
    use SoftDeletes;

    protected $table = 'impostos';
    protected $primaryKey = 'IMP_CODIGO';
    protected $fillable = ['IMP_NOME','IMP_DESCRICAO', 'IMP_TAXA']; 
    
    public $rules = [
        'IMP_NOME' => 'required|max:15',
        'IMP_DESCRICAO' => 'required|max:80',
        'IMP_TAXA' => 'required',
    ];
}
