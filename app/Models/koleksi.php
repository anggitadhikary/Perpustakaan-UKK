<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class koleksi extends Model
{
    use HasFactory;
    protected $table = 'koleksi';
    protected $primaryKey = 'id_koleksi';
    protected $fillable = [
        'id_user',
        'id_buku',
    ];

    public function User()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function buku()
    {
        return $this->belongsTo(buku::class, 'id_buku');
    }
}
