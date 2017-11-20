<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * App\UserType
 *
 * @property int $user_type_id
 * @property string $name_en
 * @property string $name_ar
 * @property string $code
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserType whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserType whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserType whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserType whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserType whereUserTypeId($value)
 * @mixin \Eloquent
 */
class UserType extends Model
{
    protected $fillable=["name_en","name_ar","code"];
    protected $primaryKey="user_type_id";

    public function user()
    {
        return $this->hasMany(User::class,'user_type_id','user_type_id');
    }
}
