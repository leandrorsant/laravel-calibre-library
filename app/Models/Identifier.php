<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Identifier
 * 
 * @property int $id
 * @property int $book
 * @property string $type
 * @property string $val
 * @property string|null $trial015
 *
 * @package App\Models
 */
class Identifier extends Model
{
	protected $table = 'identifiers';
	public $timestamps = false;

	protected $casts = [
		'book' => 'int'
	];

	protected $fillable = [
		'type',
		'val',
	];
}
