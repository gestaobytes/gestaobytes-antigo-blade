<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
// use App

class SubCategorias extends Model
{

    use SoftDeletes;

    protected $table = 'subcategorias';
    protected $primaryKey = 'SUBCAT_CODIGO';
    protected $fillable = ['CAT_CODIGO', 'SUBCAT_TITULO', 'SUBCAT_SLUG', 'SUBCAT_DESCRICAO'];
    public $rules = [
        'CAT_CODIGO' => 'required|numeric',
        'SUBCAT_TITULO' => 'required|min:4|max:50',
        'SUBCAT_SLUG' => 'required|max:60',
        'SUBCAT_DESCRICAO' => 'max:250',
    ];


    public function categoria()
    {
        return $this->belongsTo(Categorias::class, 'CAT_CODIGO');
    }

    public function posts()
    {
        return $this->hasMany(Posts::class, 'POST_CODIGO');
    }

}
