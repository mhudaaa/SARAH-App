<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kualitas extends Model{
    protected $table = 'tb_cek_kualitas';
    protected $primaryKey = 'id_cek';

    protected $fillable = [
		'cek_warna', 'cek_bau', 'cek_rasa', 'jumlah_susu', 'pH', 'hasil'
	];

	protected $hidden = [
		'id_cek'
	];

	// Join table
	public function warna(){
		return $this->belongsTo(Warna::class, 'cek_warna');
	}
	public function rasa(){
		return $this->belongsTo(Rasa::class, 'cek_rasa');
	}
	public function bau(){
		return $this->belongsTo(Bau::class, 'cek_bau');
	}

	// Scope / kondisi
	public function scopeBaik($query) {
		return $query->where('hasil', 1);
	}
	public function scopeCukup($query) {
		return $query->where('hasil', 2);
	}
	public function scopeTidak($query) {
		return $query->where('hasil', 3);
	}
}
