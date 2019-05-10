<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artigos extends Model
{

    use SoftDeletes;

    protected $table = 'artigos';
    protected $primaryKey = 'ART_CODIGO';
    protected $fillable = ['ART_TITULO', 'ART_TEXTO'];

    public $rules = [
        'ART_TITULO' => 'max:255',
        'ART_TEXTO' => 'required',
    ];

    //    public function post() {
    //        return $this->belongsToMany(\App\Models\Restrito\Posts::class, 'post_artigos', 'POST_CODIGO', 'POST_CODIGO');
    //    }

    public function post()
    {
        //    $this->belongsToMany('relacao', 'nome da tabela pivot', 'key ref. books em pivot', 'key ref. author em pivot')
        //return $this->belongsToMany(\App\Models\Restrito\Posts::class, 'post_artigos', 'POST_CODIGO', 'ART_CODIGO')->withPivot(['status']);
        return $this->belongsToMany(\App\Models\Restrito\Posts::class, 'post_artigos', 'POST_CODIGO', 'ART_CODIGO');
    }
}
