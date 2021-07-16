<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ventes extends Model
{
    use HasFactory;
    protected $table="ventes";
    public $timestamps = true;

    protected $fillable = [
        'nbvente', 'restants','quantite','agent_id','pains_id'
      ];
    
      public function agents_commerciaux() {
      return $this->belongsTo(agentscommerciaux::class);
      
    }
}
