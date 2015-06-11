<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model {

	//

	use SoftDeletes;
	
	protected $fillable = array('title','description','intro','slug');

}
