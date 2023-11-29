<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AnnotationsFtsDocsize
 * 
 * @property int $id
 * @property string|null $sz
 *
 * @package App\Models
 */
class AnnotationsFtsDocsize extends Model
{
	protected $table = 'annotations_fts_docsize';
	public $timestamps = false;

	protected $fillable = [
		'sz',
	];
}
