<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AnnotationsFtsStemmed
 * 
 * @property string|null $searchable_text
 *
 * @package App\Models
 */
class AnnotationsFtsStemmed extends Model
{
	protected $table = 'annotations_fts_stemmed';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'searchable_text',
	];
}
