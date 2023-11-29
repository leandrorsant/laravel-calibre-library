<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Preference
 * 
 * @property int $id
 * @property string $key
 * @property string $val
 *
 * @package App\Models
 */
class Preference extends Model
{
	protected $table = 'preferences';
	public $timestamps = false;

	protected $fillable = [
		'key',
		'val',
	];
}
