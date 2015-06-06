<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class workRequest extends Model {

  protected $table = 'workRequests';

  protected $fillable = [
    'title',
    'description',
    'geolocation'
  ];

}
