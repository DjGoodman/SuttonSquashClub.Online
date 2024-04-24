<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'user_id'
    ];

    public function teams(){
        return $this->belongsToMany(Team::class);
    }

    public function clubs(){
        return $this->belongsToMany(Club::class);
    }

    public function fixtures(){
        return $this->belongsToMany(Fixture::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
