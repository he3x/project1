<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $table ='peserta';

    protected $fillable = ['nama','email','phone'];
}
