<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AnnotationsDirtied
 * 
 * @property int $id
 * @property int $book
 * @property string|null $trial989
 *
 * @package App\Models
 */
class AnnotationsDirtied extends Model
{
	protected $table = 'annotations_dirtied';
	public $timestamps = false;

	protected $casts = [
		'book' => 'int'
	];

	protected $fillable = [
		
	];
}
