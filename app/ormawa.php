<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ormawa extends Model
{
	 use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

 	protected $table='ormawa';
    protected $fillable = [
    	'kd_ormawa',
    	'nm_ormawa',
    	'desk_ormawa',
    	'crated_at',
    	'updated_at'
    ];
    public function detail(){
    	return $this->hasMany('App/proposalDetail');
    }


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */



}
