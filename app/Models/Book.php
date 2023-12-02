<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Book
 * 
 * @property int $id
 * @property string $title
 * @property string|null $sort
 * @property Carbon|null $timestamp
 * @property Carbon|null $pubdate
 * @property float $series_index
 * @property string|null $author_sort
 * @property string|null $isbn
 * @property string|null $lccn
 * @property string $path
 * @property int $flags
 * @property string|null $uuid
 * @property bool|null $has_cover
 * @property Carbon $last_modified
 * @property string|null $trial999
 *
 * @package App\Models
 */
class Book extends Model
{
	protected $table = 'books';
	public $timestamps = false;

	protected $casts = [
		'timestamp' => 'datetime',
		'pubdate' => 'datetime',
		'series_index' => 'float',
		'flags' => 'int',
		'has_cover' => 'bool',
		'last_modified' => 'datetime'
	];

	protected $fillable = [
		'title',
		'sort',
		'timestamp',
		'pubdate',
		'series_index',
		'author_sort',
		'isbn',
		'lccn',
		'path',
		'flags',
		'uuid',
		'has_cover',
		'last_modified'
	];

	public function comments(): HasMany
	{
		return $this->hasMany(Comment::class, 'book');
	}

	public function authors(): BelongsToMany
	{
		return $this->belongsToMany(Author::class, 'books_authors_link', 'book','author');
	}

	public function series(): BelongsToMany
	{
		return $this->belongsToMany(Series::class,'books_series_link','book','series');
	}

	public function rating(): BelongsToMany
	{
		return $this->belongsToMany(Rating::class,'books_ratings_link','book', 'rating');
	}

	public function languages(): BelongsToMany
	{
		return $this->belongsToMany(Language::class,'books_languages_link','book','lang_code');
	}

}
