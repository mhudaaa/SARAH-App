<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pakan extends Model{
    protected $table = 'tb_pakan';
    protected $primaryKey = 'id_pakan';

    protected $fillable = [
		'jml_pakan', 'jml_air'
	];

	public function scopePagi($query) {
		return $query->where('id_pakan', 1);
	}
	public function scopeSiang($query) {
		return $query->where('id_pakan', 2);
	}
}