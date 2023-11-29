<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomColumn
 * 
 * @property int $id
 * @property string $label
 * @property string $name
 * @property string $datatype
 * @property bool $mark_for_delete
 * @property bool $editable
 * @property string $display
 * @property bool $is_multiple
 * @property bool $normalized
 *
 * @package App\Models
 */
class CustomColumn extends Model
{
	protected $table = 'custom_columns';
	public $timestamps = false;

	protected $casts = [
		'mark_for_delete' => 'bool',
		'editable' => 'bool',
		'is_multiple' => 'bool',
		'normalized' => 'bool'
	];

	protected $fillable = [
		'label',
		'name',
		'datatype',
		'mark_for_delete',
		'editable',
		'display',
		'is_multiple',
		'normalized',
	];
}
