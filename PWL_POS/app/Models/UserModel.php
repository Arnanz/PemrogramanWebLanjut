<?php

namespace App\Models;
use App\Models\LevelModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use illuminate\Foundation\Auth\User as Authenticatable;

class UserModel extends Authenticatable
{
    use HasFactory;
    protected $table ='m_user';
    protected $primaryKey = 'user_id';

    protected $fillable = ['level_id', 'username', 'nama', 'password'];
    protected $hidden = ['password'];
    protected $casts = [
        'password' => 'hashed'];
    public function level(): BelongsTo
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }
        //mendapatkan nama role
    public function getRoleName(): string
    {
        return $this->level->level_nama;
    }

    //cek apakah user memiliki role tertentu
    public function hasRole(string $role): bool
    {
        return $this->level->level_nama == $role;
    }
}
