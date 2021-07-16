<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class versement extends Model
{
    use HasFactory;
    protected $table="versements";
    public $timestamps = true;

    protected $fillable = [
        'Montant', 'agent_id','pains_id'
      ];
    
      public function agents_commerciaux() {
      return $this->belongsTo(agentscommerciaux::class);
      
    }
}
