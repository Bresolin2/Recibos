<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permissao extends Model
{
    protected $table = 'maxirecibo_permissions';

    public function Cliente(){
        return $this->hasOne(Permissao::class, 'id_client');
    }

    protected $primaryKey = 'id';
}
