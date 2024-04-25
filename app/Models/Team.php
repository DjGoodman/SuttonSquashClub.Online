<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'club_id',
    ];

    function players()
    {
        return $this->belongsToMany(Player::class);
    }

    function club()
    {
        return $this->belongsTo(Club::class);
    }

    function fixtures()
    {
        return $this->hasMany(Fixture::class);
    }
}
