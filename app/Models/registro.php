<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registro extends Model
{
    use HasFactory;
    protected $table = 'registro';
    protected $primaryKey = 'id';
    protected  $fillable = [
        'name',
        'lastname',
        'n_documento',
        'N_ficha',
        'date_reg',
        'email',
    ];
}
class rol extends Model
{
    use HasFactory;
    protected $table = 'rol';
    protected $primaryKey = 'id';
    protected  $fillable = [
        'rols',

    ];
}
class genre extends Model
{
    use HasFactory;
    protected $table = 'genre';
    protected $primaryKey = 'id';
    protected  $fillable = [
        'genres',

    ];
}
class jornada extends Model
{
    use HasFactory;
    protected $table = 'jornada';
    protected $primaryKey = 'id';
    protected  $fillable = [
        'jornada',

    ];
}
