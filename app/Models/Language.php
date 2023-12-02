<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Language
 * 
 * @property int $id
 * @property string $lang_code
 * @property string|null $trial015
 *
 * @package App\Models
 */
class Language extends Model
{
	protected $table = 'languages';
	public $timestamps = false;

	protected $fillable = [
		'lang_code',
	];

	public function books(): BelongsToMany
	{
		return $this->belongsToMany(Book::class,'books_languages_link','lang_code', 'book');
	}
}
