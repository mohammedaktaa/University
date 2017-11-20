<?php

namespace Modules\General\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Modules\General\Entities\Registration
 *
 * @property int $register_id
 * @property string $username
 * @property string $total_baccalurate
 * @property string $math
 * @property string $arabic
 * @property string $english
 * @property string $french
 * @property string $physics
 * @property string $chemics
 * @property string $science
 * @property string $national_education
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Registration whereArabic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Registration whereChemics($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Registration whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Registration whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Registration whereEnglish($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Registration whereFrench($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Registration whereMath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Registration whereNationalEducation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Registration wherePhysics($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Registration whereRegisterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Registration whereScience($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Registration whereTotalBaccalurate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Registration whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Registration whereUsername($value)
 * @mixin \Eloquent
 */
class Registration extends Model
{
    protected $fillable = ['username','total_baccalurate'];
    protected $primaryKey="register_id";

    public function subject()
    {
        return self::belongsTo(Subject::class,'register_id');
    }
    public function faculty()
    {
        return self::belongsToMany(FacultyUniversity::class,'register_faculties','register_id','faculty_id');
    }

    public function registration()
    {
        return self::hasMany(RegisterFaculty::class,'register_id','register_id');
    }
}
