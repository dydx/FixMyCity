<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkOrder extends Model
{
    protected $table = 'work_orders';

    protected $fillable = [
      'description',
      'latitude',
      'longitude',
      'completed'
    ];
}
