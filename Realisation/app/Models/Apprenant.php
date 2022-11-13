<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenant extends Model
{
    use HasFactory;

    public function Briefs(){
        return $this->belongsToMany(Brief::class, 'apprenants_brief', 'id_apprenant', 'id_brief');
    }
}
