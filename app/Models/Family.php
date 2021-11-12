<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;

    protected $table = 'families';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id', 'nama', 'tempat_lahir',
        'tanggal_lahir', 'jenis_kelamin',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
