<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
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
 */
	class User extends \Eloquent {}
}

namespace App{
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
 */
	class UserType extends \Eloquent {}
}

