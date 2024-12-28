<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
   {
   
      use HasFactory;

      protected $fillable = [
        "title",
        "description",
        
      ];
      // function scopeActive($quary){
         // return $quary->where("status",1);
      // }
 }
