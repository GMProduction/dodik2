<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    //
    protected $table = 'jadwal';

    public function lelang()
    {
        return $this->belongsTo(Lelang::class);
    }

}
