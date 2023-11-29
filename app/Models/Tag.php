<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
