<?php

namespace Modules\General\Entities;

use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * Modules\General\Entities\Faculty
 *
 * @property int $faculty_id
 * @property string $name_en
 * @property string $name_ar
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Faculty whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Faculty whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Faculty whereFacultyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Faculty whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Faculty whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Faculty whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Faculty extends Model
{
    protected $fillable = ['name_en', 'name_ar'];
    protected $primaryKey = "faculty_id";

    public function university()
    {
        return self::belongsToMany(University::class, 'faculty_universities', 'faculty_id', 'university_id');
    }

    public function user()
    {
        return self::hasMany(User::class, 'faculty_id', 'faculty_id');
    }

    public function differentiation()
    {
      return self::belongsToMany(Differentiation::class,'differentiation_faculties','faculty_id','differentiation_id')  ;
    }
}
