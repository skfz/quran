<?php

namespace Skfz\Quran\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MichaelAChrisco\ReadOnly\ReadOnlyTrait;

class Group extends Model
{
    use HasFactory, ReadOnlyTrait;

    public function chapters() {
        return $this->hasMany(Chapter::class);
    }

    public function verses() {
        return $this->hasManyThrough(Verse::class, Chapter::class);
    }
}
