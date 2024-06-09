<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UserModel extends Model
{
    use HasFactory;
    public function level(): BelongsTo
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }

    protected $table = 'm_user'; // definisi tabel yang akna digunakan
    // protected $primaryKey = 'user_id'; // definisi PK yang akna digunakan

    protected $fillable = ['level_id', 'username', 'nama', 'password'];
    // protected $guarded = ['level_id', 'username', 'nama', 'password'];
}
