<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Note extends \FamilyTree365\LaravelGedcom\Models\Note
{
    use HasFactory;

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
