<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //Разрешает сохранять все поля которые передаем через данную переменную
    protected $fillable = [
        'title', 'content', 'price'
    ];
}
