<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Comment
 * 
 * @property int $id
 * @property int $book
 * @property string $text
 *
 * @package App\Models
 */
class Comment extends Model
{
	protected $table = 'comments';
	public $timestamps = false;

	protected $casts = [
		'book' => 'int'
	];

	protected $fillable = [
		'text',
	];
}
