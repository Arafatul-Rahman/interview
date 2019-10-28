<?php

namespace Bulkly;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'buffer_postings';

     public function account()
    {
        return $this->belongsTo(account::class,'account_id');
    }
     public function group()
    {
        return $this->belongsTo(group::class,'group_id');
    }
}
