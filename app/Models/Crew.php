<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{
    use HasFactory;
    protected $table = "petugas";
    protected $fillable = ['id','nama_petugas','username','password','telp','level'];

}
