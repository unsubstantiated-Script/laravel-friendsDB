<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    // use HasFactory;
    //special variable that EM looks for
    //to determine of you can do mass creations/updates
    protected $fillable = array('first_name', 'last_name', 'age');
}
