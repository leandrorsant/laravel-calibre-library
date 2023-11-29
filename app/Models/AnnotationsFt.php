<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AnnotationsFt
 * 
 * @property string|null $searchable_text
 * @property string|null $trial992
 *
 * @package App\Models
 */
class AnnotationsFt extends Model
{
	protected $table = 'annotations_fts';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'searchable_text',
	];
}
