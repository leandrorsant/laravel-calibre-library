<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Rating
 * 
 * @property int $id
 * @property int $rating
 *
 * @package App\Models
 */
class Rating extends Model
{
	protected $table = 'ratings';
	public $timestamps = false;

	protected $casts = [
		'rating' => 'int'
	];

	protected $fillable = [
		'rating'
	];

	public function books(): BelongsToMany
	{
		return $this->belongsToMany(Book::class, 'books_ratings_link','rating', 'lang_code');
	}
}
