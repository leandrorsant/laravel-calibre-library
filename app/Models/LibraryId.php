<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LibraryId
 * 
 * @property int $id
 * @property string $uuid
 *
 * @package App\Models
 */
class LibraryId extends Model
{
	protected $table = 'library_id';
	public $timestamps = false;

	protected $fillable = [
		'uuid',
	];
}
