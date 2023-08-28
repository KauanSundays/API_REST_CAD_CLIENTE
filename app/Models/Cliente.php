<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    // $table->string('cliente');
    // $table->string('endereco');
    // $table->string('cidade');
    // $table->string('cep');
    // $table->string('telefone');

    protected $fillable = [
        'cliente',
        'endereco',
        'cidade',
        'cep',
        'telefone'
    ];
}
