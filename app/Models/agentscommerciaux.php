<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agentscommerciaux extends Model
{
    use HasFactory;
    protected $table="agents_commerciaux";
    public $timestamps = true;

    protected $fillable = [
        'nom', 'prenom','datenaiss','adresse','telephone','photo',
      ];
    
      public function pains() {
      return $this->hasMany(pains::class);
    }
    public function ventes() {
        return $this->hasMany(ventes::class);
      }
      public function versement() {
        return $this->hasMany(versement::class);
      }
}
