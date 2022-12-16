<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    use HasFactory;
    protected $table = 'sekolah';
    public $guarded = ["id"];

    public function sekolah()
    {
        return $this->hasMany(User::class, 'id');
    }
}
