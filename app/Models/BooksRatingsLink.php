<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BooksRatingsLink
 * 
 * @property int $id
 * @property int $book
 * @property int $rating
 *
 * @package App\Models
 */
class BooksRatingsLink extends Model
{
	protected $table = 'books_ratings_link';
	public $timestamps = false;

	protected $casts = [
		'book' => 'int',
		'rating' => 'int'
	];

	protected $fillable = [
		'book',
		'rating'
	];
}
