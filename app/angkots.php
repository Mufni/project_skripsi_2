<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class angkots extends Model
{
    protected $primarykey = 'kode_angkot';
    public $fillable = ['id_awal','id_akhir']
    protected $table = 'angkots';

}
