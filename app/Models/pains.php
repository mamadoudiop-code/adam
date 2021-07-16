<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pains extends Model
{
    use HasFactory;
    protected $table="pains";
    public $timestamps = true;

    protected $fillable = [
        'nbpains', 'prixTTC','quantite','agent_id'
      ];
    
      public function pains() {
      return $this->hasMany(pains::class);
      
    }
}
