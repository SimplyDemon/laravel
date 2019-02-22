<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {
	//какие значения нельзя указывать в массиве создания кастомера
	protected $guarded = [ 'id', 'created_at', 'updated_at' ];
	//указываем название таблицы
	protected $table = 'customer';
}
