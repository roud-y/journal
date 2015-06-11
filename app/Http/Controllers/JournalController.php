<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Article;

class JournalController extends Controller {

	/**
	 * Display the home page
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return view('journal/index');
	}

	/**
	 * Display the deleted articles
	 *
	 * @return Response
	 */
	public function deleted()
	{
		$article = Article::onlyTrashed()->get();
		return view('article/deleted', ['article' => $article]);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  string  $slug
	 * @return Response
	 */
	public function restore($slug)
	{
		$obj = Article::onlyTrashed()->where('slug', $slug)->first();
		$obj->restore();
		return redirect(route('article.deleted'));
	}




}
