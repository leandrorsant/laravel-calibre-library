<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LastReadPosition
 * 
 * @property int $id
 * @property int $book
 * @property string $format
 * @property string $user
 * @property string $device
 * @property string $cfi
 * @property float $epoch
 * @property float $pos_frac
 *
 * @package App\Models
 */
class LastReadPosition extends Model
{
	protected $table = 'last_read_positions';
	public $timestamps = false;

	protected $casts = [
		'book' => 'int',
		'epoch' => 'float',
		'pos_frac' => 'float'
	];

	protected $fillable = [
		'book',
		'format',
		'user',
		'device',
		'cfi',
		'epoch',
		'pos_frac',
	];
}
