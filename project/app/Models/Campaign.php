<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
     protected $fillable = ['discount_type','offer','available_to','specific_to','redemption_count','start_date','end_date','start_time','end_time'];
}
