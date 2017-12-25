<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lost extends Model
{
    protected $fillable = ['lost_item_name','lost_item_description','lost_date','person_name','person_phoneNo','person_address'];
}
