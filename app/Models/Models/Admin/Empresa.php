<?php

namespace App\Models\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = "lgs_empresa";
    protected $fillable = ['Empresa', 'FormaPago', 'CodigoDomestico', 'GLN', 'Estado'];
    protected $guarded = ['id'];// que campos laravel no dejara modificar
   //public $timestamps = false;//para que no llene los campos timestamps


}
