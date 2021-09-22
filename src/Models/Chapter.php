<?php

namespace Skfz\Quran\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MichaelAChrisco\ReadOnly\ReadOnlyTrait;

class Chapter extends Model
{
    use HasFactory, ReadOnlyTrait;

    public function group() {
        return $this->belongsTo(Group::class);
    }

    public function verses() {
        return $this->hasMany(Verse::class);
    }
}
