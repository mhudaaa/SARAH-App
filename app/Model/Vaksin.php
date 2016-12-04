<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Vaksin extends Model{
    protected $table = 'tb_vaksin';
    protected $primaryKey = 'id_vaksin';

    protected $fillable = [
		'nama_vaksin', 'manfaat', 'tgl_vaksin'
	];

	protected $hidden = [
		'id_vaksin'
	];
}
