<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AnnotationsFtsStemmedConfig
 * 
 * @property string $k
 * @property string|null $v
 *
 * @package App\Models
 */
class AnnotationsFtsStemmedConfig extends Model
{
	protected $table = 'annotations_fts_stemmed_config';
	protected $primaryKey = 'k(255';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'k',
		'v',
	];
}
