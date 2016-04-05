<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class noticias extends Model
{

    public function usuario_noticia()
    {
        return $this->belongsTo('App\User', 'autor');
    }

}
