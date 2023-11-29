<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BooksTagsLink
 * 
 * @property int $id
 * @property int $book
 * @property int $tag
 *
 * @package App\Models
 */
class BooksTagsLink extends Model
{
	protected $table = 'books_tags_link';
	public $timestamps = false;

	protected $casts = [
		'book' => 'int',
		'tag' => 'int'
	];

	protected $fillable = [
		'book',
		'tag',
	];
}
