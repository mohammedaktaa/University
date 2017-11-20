<?php

namespace Modules\General\Entities;

use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * Modules\General\Entities\Gender
 *
 * @property int $gender_id
 * @property string $name_en
 * @property string $name_ar
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Gender whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Gender whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Gender whereGenderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Gender whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Gender whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Gender whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Gender extends Model
{
   protected $fillable=['name_en','name_ar'];
   protected $primaryKey="gender_id";

    public function user()
    {
        return self::hasMany(User::class,'gender_id','gender_id');
   }
}
