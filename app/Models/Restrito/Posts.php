<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posts extends Model {

    use SoftDeletes;

    protected $table = 'posts';
    protected $primaryKey = 'POST_CODIGO';
    
    protected $fillable = [
        'SUBCAT_CODIGO',
        'user_id',
        'POST_CODIGO_CORRELATA',
        'POST_RETRANCA',
        'POST_TITULO',
        'POST_TITULOCHAMADA',
        'POST_SUBTITULO',
        'POST_SLUG',
        'POST_STATUS',
        'POST_TEXTO',
        'POST_TAGS',
        'POST_TAGS_URL',
        'POST_IMAGE',
        'POST_IMAGE_LEGENDA',
        'POST_IMAGE_CREDITO',
        'POST_VIDEO',
        ];
    
    public $rules = [
        'SUBCAT_CODIGO' => 'required|numeric',
        'user_id' => 'required|numeric',
        'POST_CODIGO_CORRELATA' => 'numeric',
        'POST_RETRANCA' => 'max:60',
        'POST_TITULO' => 'required|max:180',
        'POST_TITULOCHAMADA' => 'required|max:180',
        'POST_SUBTITULO' => 'max:256',
        'POST_SLUG' => 'required|max:256',
        'POST_STATUS' => 'required|max:15',
        'POST_TEXTO' => 'required',
        'POST_TAGS' => 'required|max:255',
        'POST_TAGS_URL' => 'required|max:255',
        'POST_IMAGE' => 'max:256',
        'POST_IMAGE_LEGENDA' => 'max:256',
        'POST_IMAGE_CREDITO' => 'max:256',
        'POST_VIDEO' => 'max:500',
    ];


    public function subcategoria()
    {
        return $this->belongsTo(SubCategorias::class, 'SUBCAT_CODIGO');
    }


}
