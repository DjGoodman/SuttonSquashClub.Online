<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'team_id',
        'fixture_name',
        'date',
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function club()
    {
        return $this->belongsTo(Club::class);
    }
}
