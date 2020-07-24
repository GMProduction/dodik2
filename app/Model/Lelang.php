<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Lelang extends Model
{
    //

    protected $table = 'lelang';

    public function jadwal()
    {
        return $this->hasOne(Jadwal::class);
    }

    public function tahapan()
    {
        return $this->hasOne(Tahapan::class);
    }
}
