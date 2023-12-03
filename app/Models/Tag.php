<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Tag
 * 
 * @property int $id
 * @property string $name
 *
 * @package App\Models
 */
class Tag extends Model
{
	protected $table = 'tags';
	public $timestamps = false;

	protected $fillable = [
		'name',
	];

	public function books(): BelongsToMany
	{
		return $this->belongsToMany(Book::class,'books_tags_link','tag','book');
	}
}
