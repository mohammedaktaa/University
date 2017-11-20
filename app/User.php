<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Modules\General\Entities\Course;
use Modules\General\Entities\Faculty;
use Modules\General\Entities\Gender;
use Modules\General\Entities\CourseUser;
use Modules\General\Entities\StudyYear;

/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property int $university_id
 * @property int $user_type_id
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUniversityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUserTypeId($value)
 * @mixin \Eloquent
 * @property-read \App\UserType $user_type
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Course[] $course
 * @property int|null $study_year_id
 * @property int|null $faculty_id
 * @property string $phone
 * @property string $mobile
 * @property string $address
 * @property string $national_number
 * @property float $total_baccalaureate
 * @property string $father_name
 * @property string $mother_name
 * @property string $birth_date
 * @property int $gender_id
 * @property-read \App\Gender $gender
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereBirthDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereFacultyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereFatherName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereGenderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereMotherName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereNationalNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereStudyYearId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereTotalBaccalaureate($value)
 * @property string|null $pdf
 * @property string|null $register_date
 * @property string|null $image
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\CourseUser[] $courseuser
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\User onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePdf($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRegisterDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\User withoutTrashed()
 * @property string|null $graduation_date
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereGraduationDate($value)
 */
class User extends Authenticatable
{
    use Notifiable,SoftDeletes;
    Const Teacher_ID = 1;
    Const Student_ID = 2;
    Const Proffessor_ID = 3;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /**
     * @param string $name
     */
//    public function setName($name)
//    {
//        $this->name = $name;
//    }

    protected $fillable = [
        'name_en','name_ar', 'email', 'password', 'university_id', 'user_type_id', 'faculty_id', 'study_year_id', 'phone','total_baccalaureate','father_name'
        ,'mother_name','mobile','address','national_number','birth_date','register_date','graduation_date'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         'remember_token',
    ];

    /**
     * @return string
     */
    public function getName($lang='en')
    {
        return $this['name_'.$lang];
    }
    public function isAdmin()
    {
        return $this->user_type_id == self::Teacher_ID || $this->user_type_id == self::Proffessor_ID ? true : false;
    }

    public function user_type()
    {
        return $this->belongsTo(UserType::class, 'user_type_id', 'user_type_id');
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class, 'gender_id', 'gender_id');
    }

    public function course()
    {
        return $this->belongsToMany(Course::class, 'course_users', 'user_id', 'course_id')->withPivot('mark');
    }

    public function routeNotificationForNexmo()
    {
        return $this->phone;
    }

    public function courseuser()
    {
        return $this->hasMany(CourseUser::class, 'user_id', 'id');
    }

    public function faculty()
    {
        return self::belongsTo(Faculty::class, 'faculty_id', 'faculty_id');
    }

    public function study_year()
    {
        return self::belongsTo(StudyYear::class, 'study_year_id', 'study_year_id');
    }


   
}
