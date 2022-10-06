<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'maxirecibo_clientes';

    public function Permissao(){
        return $this->hasOne(Permissao::class, 'id_client');
    }

    protected $primaryKey = 'id';
}