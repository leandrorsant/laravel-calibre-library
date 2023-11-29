<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BooksPluginDatum
 * 
 * @property int $id
 * @property int $book
 * @property string $name
 * @property string $val
 *
 * @package App\Models
 */
class BooksPluginDatum extends Model
{
	protected $table = 'books_plugin_data';
	public $timestamps = false;

	protected $casts = [
		'book' => 'int'
	];

	protected $fillable = [
		'name',
		'val',
	];
}
