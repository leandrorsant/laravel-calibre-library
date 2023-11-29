<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
