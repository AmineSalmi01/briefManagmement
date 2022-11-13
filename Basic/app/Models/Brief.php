<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brief extends Model
{
    use HasFactory;

    public function Task(){
        return $this->hasMany(Task::class);
    }
    
    public function Apprenants(){
        return $this->belongsToMany(Apprenant::class, 'apprenants_brief', 'id_brief', 'id_apprenant');
    }
    
    
}
