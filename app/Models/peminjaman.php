<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjaman';

    protected $primaryKey = 'id_peminjaman';

    protected $fillable = [
        'id_user',
        'id_buku',
        'tanggal_pinjam',
        'tanggal_kembali',
        'jumlah',
        'status'
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
