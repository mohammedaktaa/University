<?php

namespace Modules\General\Entities;

use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * Modules\General\Entities\CourseUser
 *
 * @property int $id
 * @property int $user_id
 * @property int $course_id
 * @property int $mark
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Modules\General\Entities\Course $course
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\CourseUser whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\CourseUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\CourseUser whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\CourseUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\CourseUser whereMark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\CourseUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\CourseUser whereUserId($value)
 * @mixin \Eloquent
 */
class CourseUser extends Model
{
    protected $fillable=['user_id','course_id','mark'];
    protected $primaryKey="id";

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class,'course_id','course_id');
    }
}
