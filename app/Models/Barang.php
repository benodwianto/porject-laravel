<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['kategori'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['cari'] ?? false, function ($query, $cari) {
            return $query->where('namabarang', 'like', '%' . $cari . '%')->orWhere('kategori_id', 'like', '%' . $cari . '%');
        });

        $query->when($filters['kategori'] ?? false, function ($query, $kategori) {
            return $query->whereHas('kategori', function ($query) use ($kategori) {
                $query->where('nama_kategori', $kategori);
            });
        });
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
