<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Author
 * 
 * @property int $id
 * @property string $name
 * @property string|null $sort
 * @property string $link
 *
 * @package App\Models
 */
class Author extends Model
{
	protected $table = 'authors';
	public $timestamps = false;

	protected $fillable = [
		'name',
		'sort',
		'link',
	];
}
