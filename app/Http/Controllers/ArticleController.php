<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\CreateArticleRequest;
use App\Http\Requests\UpdateArticleRequest;

use App\User;
use App\Article;
use DB;

class ArticleController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$obj = Article::get();
		return view('article/index', ['article' => $obj]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('article/create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateArticleRequest $request)
	{
		//
		var_dump($request->all());
		$obj = new Article();
		$obj->create($request->all());
		
		return redirect(route('article.index'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
		//
		$obj = Article::where("slug", "=", $slug)->first();
		return view("article/show", ['article' => $obj]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($slug)
	{
		//
		$obj = Article::where("slug", "=", $slug)->first();
		return view("article/edit", ['article' => $obj]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($slug, UpdateArticleRequest $request)
	{
		//
		$obj = Article::where("slug", "=", $slug)->first();
		$obj->fill($request->all());
		$obj->save();
		return redirect(route('article.index'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($slug)
	{
		//
		$obj = Article::where("slug", "=", $slug)->first();
		$obj->delete();
		return redirect(route('article.index'));
	}

}
