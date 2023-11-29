<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Language
 * 
 * @property int $id
 * @property string $lang_code
 * @property string|null $trial015
 *
 * @package App\Models
 */
class Language extends Model
{
	protected $table = 'languages';
	public $timestamps = false;

	protected $fillable = [
		'lang_code',
	];
}
