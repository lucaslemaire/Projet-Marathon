<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    protected $table = 'lecture';

    public function chapitre(){
        return $this->hasMany("App\Lecture","chapitre_id");
    }

    public function utilisateur() {
        return $this->belongsTo("App\User", "user_id");
    }

    public function chapitres() {
        return $this->hasMany("App\Chapitre", "histoire_id");
    }


}

