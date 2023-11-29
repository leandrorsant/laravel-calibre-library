<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BooksPublishersLink
 * 
 * @property int $id
 * @property int $book
 * @property int $publisher
 *
 * @package App\Models
 */
class BooksPublishersLink extends Model
{
	protected $table = 'books_publishers_link';
	public $timestamps = false;

	protected $casts = [
		'book' => 'int',
		'publisher' => 'int'
	];

	protected $fillable = [
		'book',
		'publisher',
	];
}
