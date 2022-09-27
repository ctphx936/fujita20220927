<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Todo extends Model
{
    public $timestamps = false;

    // テーブル名
    protected $table = 'todos';

    //　可変項目
    protected $fillable =
    [
        'id',
        'content',
        'created_at'
       
    ];
}
