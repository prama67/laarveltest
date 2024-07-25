<?php

namespace App\Models;

use App\Models\katagori;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postingan extends Model
{
    use HasFactory;

      protected $guarded = ['id'];

      public function katagori(){

        return $this->belongsTo(katagori::class, 'katagoris_id');

      }
}
