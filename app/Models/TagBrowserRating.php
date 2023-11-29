<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TagBrowserRating
 * 
 * @property int|null $id
 * @property int|null $rating
 * @property string|null $count
 * @property string|null $avg_rating
 * @property int|null $sort
 *
 * @package App\Models
 */
class TagBrowserRating extends Model
{
	protected $table = 'tag_browser_ratings';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'rating' => 'int',
		'sort' => 'int'
	];

	protected $fillable = [
		'id',
		'rating',
		'count',
		'avg_rating',
		'sort',
	];
}
