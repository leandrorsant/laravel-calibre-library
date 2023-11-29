<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Feed
 * 
 * @property int $id
 * @property string $title
 * @property string $script
 *
 * @package App\Models
 */
class Feed extends Model
{
	protected $table = 'feeds';
	public $timestamps = false;

	protected $fillable = [
		'title',
		'script',
	];
}
