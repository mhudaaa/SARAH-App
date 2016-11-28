<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model{
    protected $table = 'tb_user';
    protected $primaryKey = 'id_user';

    public function scopeAdmin($query) {
		return $query->where('status', 1);
	}

}

