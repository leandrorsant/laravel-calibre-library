<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BooksSeriesLink
 * 
 * @property int $id
 * @property int $book
 * @property int $series
 * @property string|null $trial005
 *
 * @package App\Models
 */
class BooksSeriesLink extends Model
{
	protected $table = 'books_series_link';
	public $timestamps = false;

	protected $casts = [
		'book' => 'int',
		'series' => 'int'
	];

	protected $fillable = [
		'book',
		'series',
	];
}
