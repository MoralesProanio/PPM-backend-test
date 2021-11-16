<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $table = "tickets";

    protected $fillable = [
                'origin_city',
                'destination_city',
                'departure_date',
            ];
    //relationship
    public function user(){
        return $this->belongsTo(User::class);
    }
}
