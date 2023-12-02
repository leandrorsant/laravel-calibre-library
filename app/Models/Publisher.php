<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Publisher
 * 
 * @property int $id
 * @property string $name
 * @property string|null $sort
 *
 * @package App\Models
 */
class Publisher extends Model
{
	protected $table = 'publishers';
	public $timestamps = false;

	protected $fillable = [
		'name',
		'sort',
	];

	public function books(): BelongsToMany
	{
		return $this->belongsToMany(Book::class,'books_publishers_link','publisher', 'book');
	}
}
