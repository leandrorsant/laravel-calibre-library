<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MetadataDirtied
 * 
 * @property int $id
 * @property int $book
 *
 * @package App\Models
 */
class MetadataDirtied extends Model
{
	protected $table = 'metadata_dirtied';
	public $timestamps = false;

	protected $casts = [
		'book' => 'int'
	];

	protected $fillable = [
		'book'
	];
}
