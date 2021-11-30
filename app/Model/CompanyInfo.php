<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CompanyInfo extends Model
{
    //


    public function userCompany(){
        $this->belongsTo(User::class,'com_id','id');
    }
}
