<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TagBrowserPublisher
 * 
 * @property int|null $id
 * @property string|null $name
 * @property string|null $count
 * @property string|null $avg_rating
 * @property string|null $sort
 * @property string|null $trial022
 *
 * @package App\Models
 */
class TagBrowserPublisher extends Model
{
	protected $table = 'tag_browser_publishers';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'id',
		'name',
		'count',
		'avg_rating',
		'sort',
	];
}
