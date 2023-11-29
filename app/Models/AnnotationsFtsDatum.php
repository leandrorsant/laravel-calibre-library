<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AnnotationsFtsDatum
 * 
 * @property int $id
 * @property string|null $block
 *
 * @package App\Models
 */
class AnnotationsFtsDatum extends Model
{
	protected $table = 'annotations_fts_data';
	public $timestamps = false;

	protected $fillable = [
		'block',
	];
}
