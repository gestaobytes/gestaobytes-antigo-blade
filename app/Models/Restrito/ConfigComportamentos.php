<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ConfigComportamentos extends Model {
    
    use SoftDeletes;

    protected $table = 'config_comportamentos';
    protected $primaryKey = 'CONFIG_CODIGO';
    protected $fillable = ['CONFIG_METODOURL', 'CONFIG_VOTARSEMREGISTRO','CONFIG_AUTOAPROVACAO', 'CONFIG_AUTOLISTAGEM', 'CONFIG_AUTOCARREGAMENTO', ];
    
    public $rules = [
        'CONFIG_METODOURL' => 'required|max:120',
        'CONFIG_VOTARSEMREGISTRO' => 'required|max:3',
        'CONFIG_AUTOAPROVACAO' => 'required|max:3',
        'CONFIG_AUTOLISTAGEM' => 'required|max:3',
        'CONFIG_AUTOCARREGAMENTO' => 'required|max:3',
    ];
}