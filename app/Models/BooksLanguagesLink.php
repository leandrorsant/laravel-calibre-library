<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BooksLanguagesLink
 * 
 * @property int $id
 * @property int $book
 * @property int $lang_code
 * @property int $item_order

 *
 * @package App\Models
 */
class BooksLanguagesLink extends Model
{
	protected $table = 'books_languages_link';
	public $timestamps = false;

	protected $casts = [
		'book' => 'int',
		'lang_code' => 'int',
		'item_order' => 'int'
	];

	protected $fillable = [
		'item_order',
	];
}
