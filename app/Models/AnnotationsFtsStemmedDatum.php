<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AnnotationsFtsStemmedDatum
 * 
 * @property int $id
 * @property string|null $block
 *
 * @package App\Models
 */
class AnnotationsFtsStemmedDatum extends Model
{
	protected $table = 'annotations_fts_stemmed_data';
	public $timestamps = false;

	protected $fillable = [
		'block',
	];
}
