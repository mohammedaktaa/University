<?php

namespace Modules\General\Entities;

use App\User;
use Illuminate\Database\Eloquent\Model;


/**
 * Modules\General\Entities\Course
 *
 * @property int $course_id
 * @property int $category_id
 * @property string $name_en
 * @property string $name_ar
 * @property string $code
 * @property int|null $semester_id
 * @property string $year
 * @property int|null $study_year_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $deleted_At
 * @property-read \Modules\General\Entities\Category $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\General\Entities\CourseUser[] $courseuser
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $user
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Course whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Course whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Course whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Course whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Course whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Course whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Course whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Course whereSemesterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Course whereStudyYearId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Course whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Course whereYear($value)
 * @mixin \Eloquent
 */
class Course extends Model
{
    protected $fillable = ["name_en", "name_ar", "code", "category_id",'year','semester_id','study_year_id'];
    protected $primaryKey = "course_id";

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','category_id');
    }

    public function user()
    {
        return $this->belongsToMany(User::class,'course_user','course_id','user_id')->withPivot('mark');
    }

    public function courseuser()
    {
        return $this->hasMany(CourseUser::class,'course_id','course_id');
    }

    public function semester()
    {
        return self::belongsTo(Semester::class,'semester_id','semester_id');
    }
    public function study_year()
    {
        return self::belongsTo(StudyYear::class,'study_year_id','study_year_id');
    }
}
