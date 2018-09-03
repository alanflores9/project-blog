<?php

namespace App\Entities;

use App\user;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Assistance extends Model
{
    //
	use SoftDeletes;

    protected $fillable = [
            'user_id',
            'number',
            'data_arrive',
           	'time_arrive',
            'state',
            'detail',
            'detail_option',
            'cost'
    ];

     protected $rules = [
            'user_id'=>'interger',
            'number'=>'interger|min:1|max:8',
            'data_arrive'=>'date',       
            'detail'=>'string|min:5|max:100',            
            'cost'=>'required'
    ]; 	//define las validaciones de cada atributo
    
    protected $dates=['deleted_at'];
    protected $hidden=['deleted_at','created_at','updated_at'];
	/*
	relacion de user , muchos a uno
	*/
    public function user()
    {
    	return $this->hasMany(User::class);
    }
    /*
	relacion de user , uno a muchos

    */
    public function assistenceDatail()
    {
    	return $this->belongsTo(AssistanceDetail::class);
    }

    public function isValidation()
    {
    	$this->validate($data,$this->rules);
    }

    /*

	setNOMBREdelATRIBUTOAttribute

    */
    public function setDetailsAttribute($value)
    {
    	$this->attributes['details']=Str::upper($value);
    }

}
