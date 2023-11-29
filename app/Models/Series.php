<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Series
 * 
 * @property int $id
 * @property string $name
 * @property string|null $sort
 *
 * @package App\Models
 */
class Series extends Model
{
	protected $table = 'series';
	public $timestamps = false;

	protected $fillable = [
		'name',
		'sort',
	];
}
