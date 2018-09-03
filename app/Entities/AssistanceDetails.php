<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class AssistanceDetails extends Model
{
    //

    protected $fillable=[
		'assistance_id'
    ];
    public function assistence()
    {
    	return $this->hasMany(Assistance::class);
    }
}
