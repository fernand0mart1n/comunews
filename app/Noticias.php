<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class noticias extends Model
{
    protected $fillable = ['persona_id', 'documento'];

    public function usuario_noticia()
    {
        return $this->belongsTo('App\user', 'id');
    }

    protected $primaryKey = 'id';
    protected $table = 'noticias';
}
