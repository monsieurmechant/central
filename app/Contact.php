<?php

namespace App;

use App\EncryptsFields;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use EncryptsFields;

    public $encryptable = ['name', 'email', 'phone'];

    protected $fillable = ['name', 'email', 'phone', 'zip', 'campaign', 'source', 'topics'];

    protected $casts = [
        'topics' => 'array'
    ];
}
