<?php

namespace Sztukmistrz\Arrayformer\Http\Controllers;

use Illuminate\Http\Request;

class ArrayformerController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


//         $article = new \App\Entities\Article();
//         $article = \EntityManager::find('\App\Entities\Article' , 2);

// $article->setTitle('Theory of relativity11111ssssss');
// //$article->setTitle('my title in en');
// $article->setTranslatableLocale('pl'); // change locale
// \EntityManager::persist($article);
// \EntityManager::flush();



        $arr = ['a'=>'aaaaaa','b'=>'bbbbb', 'c'=>['ss'=>1]];

$arr = \Config::get('app');
//dd($arr);
        return view('arrayformer::index', compact(['arr']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
