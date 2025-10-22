<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KategoriBuku extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'kategori_buku';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_kategori',
    ];

    /**
     * Get the books for the category.
     */
    public function buku(): HasMany
    {
        return $this->hasMany(Buku::class, 'kategori_buku_id');
    }
}