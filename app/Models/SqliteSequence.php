<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SqliteSequence
 * 
 * @property string|null $name
 * @property string|null $seq
 *
 * @package App\Models
 */
class SqliteSequence extends Model
{
	protected $table = 'sqlite_sequence';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'name',
		'seq',
	];
}
