<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EOSRequest extends Model
{
  protected $table = 'eos_requests';

  protected $fillable = [
    'name',
    'description',
    'dimX',
    'dimY',
    'dimZ',
    'volume',
    'cost',
    'clean',
    'hinges',
    'threads',
    'needed_by',
    'number_of_parts',
    'status',
    'admin_notes',
    'project_id',
    'user_id',
    'stl'
  ];
}
