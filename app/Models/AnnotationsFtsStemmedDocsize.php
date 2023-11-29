<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AnnotationsFtsStemmedDocsize
 * 
 * @property int $id
 * @property string|null $sz
 * @property string|null $trial999
 *
 * @package App\Models
 */
class AnnotationsFtsStemmedDocsize extends Model
{
	protected $table = 'annotations_fts_stemmed_docsize';
	public $timestamps = false;

	protected $fillable = [
		'sz',
	];
}
