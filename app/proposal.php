<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proposal extends Model
{
      protected $table='proposal';
    protected $fillable = [
        'id_proposal',
        'jdl_kegiatan', 
        'desk_kegiatan',
        'dana_kegiatan',
        'ketuplak_kegiatan',
        'tgl_kegiatan',
        'ormawa_kd',
        'revisi_proposal',
        'status_proposal',
        'created_at',
        'updated_at'
    ];
    public function detail(){
    	return $this->hasMany('App/proposalDetail');
    }
}
