<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AnnotationsFtsStemmedIdx
 * 
 * @property string $segid
 * @property string $term
 * @property string|null $pgno
 *
 * @package App\Models
 */
class AnnotationsFtsStemmedIdx extends Model
{
	protected $table = 'annotations_fts_stemmed_idx';
	protected $primaryKey = 'segid(255';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'segid',
		'term',
		'pgno',
	];
}
