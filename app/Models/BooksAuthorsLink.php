<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BooksAuthorsLink
 * 
 * @property int $id
 * @property int $book
 * @property int $author
 *
 * @package App\Models
 */
class BooksAuthorsLink extends Model
{
	protected $table = 'books_authors_link';
	public $timestamps = false;

	protected $casts = [
		'book' => 'int',
		'author' => 'int'
	];

	protected $fillable = [
	];
}
