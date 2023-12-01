<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Author
 * 
 * @property int $id
 * @property string $name
 * @property string|null $sort
 * @property string $link
 *
 * @package App\Models
 */
class Author extends Model
{
	protected $table = 'authors';
	public $timestamps = false;

	protected $fillable = [
		'name',
		'sort',
		'link',
	];

	public function books(): BelongsToMany
	{
		return $this->belongsToMany(Book::class, 'books_authors_link', 'author','book');
	}
}
