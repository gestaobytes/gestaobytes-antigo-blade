<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Faker\Generator as FakerGenerator;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{

    public function boot()
    {

        Schema::defaultStringLength(191);

        \View::composer([
            'layouts.frontend.site',
            'site._home.index',
            'site._home.blog-details'
        ],  function ($view) {

            $categoriesBlogs = DB::table('subcategorias')
                ->where([['CAT_TIPO', 'B'], ['subcategorias.deleted_at', null] ])
                ->leftJoin('categorias', 'categorias.CAT_CODIGO', 'subcategorias.CAT_CODIGO')
                ->select('SUBCAT_CODIGO','SUBCAT_TITULO','SUBCAT_SLUG')
                ->get();

            $latestsBlogs = DB::table('posts')
                ->where([['CAT_TIPO', 'B'], ['POST_STATUS', 'ATIVO'], ['subcategorias.deleted_at', null], ['posts.deleted_at', null]])
                ->leftJoin('subcategorias', 'subcategorias.SUBCAT_CODIGO', 'posts.SUBCAT_CODIGO')
                ->leftJoin('categorias', 'categorias.CAT_CODIGO', 'subcategorias.CAT_CODIGO')
                ->orderBy('POST_CODIGO', 'desc')
                ->limit(5)
                ->get();




            $view
                // ->with('linksMunicipios', $linksMunicipios)
                ->with('latestsBlogs', $latestsBlogs)
                ->with('categoriesBlogs', $categoriesBlogs);
        });
    }

    public function register()
    {
        $this->app->singleton(FakerGenerator::class, function () {
            return FakerFactory::create('pt_BR');
        });
    }
}
