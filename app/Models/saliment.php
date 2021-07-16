<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class saliment extends Model
{
    use HasFactory;
    protected $table="saliments";
    public $timestamps = true;

    protected $fillable = [
        'designation','prixTTC','quantite','total','image'
      ];
    
      public function aliment() {
        return $this->belongsTo(aliment::class);
    }
}
