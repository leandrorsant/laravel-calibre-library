<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class ConversionOption
 * 
 * @property int $id
 * @property string $format
 * @property int $book
 * @property string $data
 *
 * @package App\Models
 */
class ConversionOption extends Model
{
	protected $table = 'conversion_options';
	public $timestamps = false;

	protected $casts = [
		'book' => 'int'
	];

	protected $fillable = [
		'format',
		'book',
		'data',
	];

	public function book(): BelongsTo
	{
		return $this->belongsTo(Book::class, 'book');
	}
}
