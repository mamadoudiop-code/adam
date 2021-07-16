<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aliment extends Model
{
    use HasFactory;
    protected $table="aliments";
    public $timestamps = true;

    protected $fillable = [
        'designation', 'total'
      ];
    
      public function Saliments() {
      return $this->hasMany(saliment::class);
      
    }
      
}
