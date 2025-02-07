<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartnerInfo extends Model
{
    protected $table = 'partner_info';
    
    protected $fillable = ['user_id', 'partner_name', 'special_note'];
}
