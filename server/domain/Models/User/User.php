<?php

namespace Domain\Models\User;

use Domain\Base\TModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use YourAppRocks\EloquentUuid\Traits\HasUuid;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class UserModel extends Authenticatable 
{
    use HasUuid, HasFactory, HasApiTokens, Notifiable;

    protected $table = "users";
    protected $primaryKey = "id_user";
    protected $fillable = ["name", "email", "password"];
}