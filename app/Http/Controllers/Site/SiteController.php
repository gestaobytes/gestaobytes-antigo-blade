<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\StandardControllerPublic;
use App\Models\Restrito\Categorias;
use App\Models\Restrito\SubCategorias;
use App\User;
//use App\Models\Restrito\Anuncios;
use App\Models\Restrito\Posts;

//use Illuminate\Http\Request;

class SiteController extends StandardControllerPublic
{

    protected $categorias;
    protected $subcategorias;
    protected $users;
    protected $posts;
    protected $anuncios;
    protected $gate;

    //    public function __construct(Categorias $categorias, User $users, Posts $posts, SubCategorias $subcategorias, Anuncios $anuncios) {
    public function __construct(Categorias $categorias, User $users, Posts $posts, SubCategorias $subcategorias)
    {

        $this->categorias = $categorias;
        $this->subcategorias = $subcategorias;

        $this->users = $users;
        $this->posts = $posts;
    }

    public function index()
    {
        $blogs = $this->posts
            ->where([['POST_IMAGE', '<>', null], ['POST_IMAGE', '<>', '']])
            ->leftJoin('subcategorias', 'subcategorias.SUBCAT_CODIGO', 'posts.SUBCAT_CODIGO')
            ->orderBy('POST_CODIGO', 'desc')
            ->limit(5)
            ->get();




        return view('site._home.index', compact('blogs'));
    }










    public function blogs()
    {
        $blogs = $this->posts
            ->where([['POST_STATUS', 'ATIVO'], ['CAT_CODIGO', 2]])
            ->leftJoin('subcategorias', 'subcategorias.SUBCAT_CODIGO', 'posts.SUBCAT_CODIGO')
            ->orderBy('POST_CODIGO', 'desc')
            ->select('subcategorias.*', 'posts.*', 'posts.created_at as datadepostagem')
            ->paginate(10);

        return view('site._home.blogs-list', compact('blogs'));
    }

    public function categoryBlog($blog)
    {
        $blogs = $this->posts
            ->where([['SUBCAT_SLUG', $blog], ['CAT_CODIGO', 2]])
            ->leftJoin('subcategorias', 'subcategorias.SUBCAT_CODIGO', 'posts.SUBCAT_CODIGO')
            ->orderBy('POST_CODIGO', 'desc')
            ->select('subcategorias.*', 'posts.*', 'posts.created_at as datadepostagem')
            ->paginate(10);

        return view('site._home.blogs-list', compact('blogs'));
    }

    public function articleBlog($blog, $slug)
    {
        $postBlogs = $this->posts
            ->where([['SUBCAT_SLUG', $blog], ['POST_SLUG', $slug], ['POST_STATUS', 'ATIVO']])
            ->leftJoin('subcategorias', 'subcategorias.SUBCAT_CODIGO', 'posts.SUBCAT_CODIGO')
            ->orderBy('POST_CODIGO', 'desc')
            ->select('subcategorias.*', 'posts.*', 'posts.created_at as datadepostagem')
            ->limit(1)
            ->get();

        return view('site._home.blog-details', compact('postBlogs'));
    }
}
