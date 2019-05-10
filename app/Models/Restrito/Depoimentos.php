<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Depoimentos extends Model
{

    use SoftDeletes;

    protected $table = 'depoimentos';
    protected $primaryKey = 'DEP_CODIGO';
    protected $fillable = ['user_id', 'DEP_TEXTO', 'DEP_STATUS'];

    public $rules = [
        'user_id' => 'required|numeric',
        'DEP_TEXTO' => 'required',
        'DEP_STATUS' => 'required|max:20',
    ];
}
