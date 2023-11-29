<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Data
 * 
 * @property int $id
 * @property int $book
 * @property string $format
 * @property int $uncompressed_size
 * @property string $name
 *
 * @package App\Models
 */
class Data extends Model
{
	protected $table = 'data';
	public $timestamps = false;

	protected $casts = [
		'book' => 'int',
		'uncompressed_size' => 'int'
	];

	protected $fillable = [
		'format',
		'uncompressed_size',
		'name',
	];
}
