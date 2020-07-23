<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tahapan extends Model
{
    //
    protected $table = 'tahapan';
    public function lelang()
    {
        return $this->belongsTo(Lelang::class);
    }
}
