<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AnnotationsFtsIdx
 * 
 * @property string $segid
 * @property string $term
 * @property string|null $pgno
 *
 * @package App\Models
 */
class AnnotationsFtsIdx extends Model
{
	protected $table = 'annotations_fts_idx';
	protected $primaryKey = 'segid(255';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'segid',
		'term',
		'pgno',
	];
}
