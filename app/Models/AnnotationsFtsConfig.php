<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AnnotationsFtsConfig
 * 
 * @property string $k
 * @property string|null $v
 *
 * @package App\Models
 */
class AnnotationsFtsConfig extends Model
{
	protected $table = 'annotations_fts_config';
	protected $primaryKey = 'k(255';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'k',
		'v',
	];
}
