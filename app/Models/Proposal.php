<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    protected $fillable = [
        'user_id',
        'partner_info_id',
        'link_opened_at',
        'status',
        'custom_message',
    ];
}
