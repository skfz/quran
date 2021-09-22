<?php

namespace Skfz\Quran\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MichaelAChrisco\ReadOnly\ReadOnlyTrait;

class Verse extends Model
{
    use HasFactory, ReadOnlyTrait;

    public function chapter() {
        return $this->belongsTo(Chapter::class);
    }
}
