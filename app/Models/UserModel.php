<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    protected $table = 'm_user'; // definisi tabel yang akna digunakan
    protected $primaryKey = 'user_id'; // definisi PK yang akna digunakan
}
