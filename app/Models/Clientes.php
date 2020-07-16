<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'statu_id', 'cliente_nome','cliente_fone1','cliente_fone2','cliente_endereco','total'
    ];


}
