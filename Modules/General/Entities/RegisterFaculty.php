<?php

namespace Modules\General\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Modules\General\Entities\RegisterFaculty
 *
 * @property int $id
 * @property int $faculty_id
 * @property int $register_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\RegisterFaculty whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\RegisterFaculty whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\RegisterFaculty whereFacultyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\RegisterFaculty whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\RegisterFaculty whereRegisterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\RegisterFaculty whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class RegisterFaculty extends Model
{
    protected $fillable = ['register_id','faculty_id'];

    public function faculty()
    {
        return self::belongsTo(FacultyUniversity::class);
    }

    public function register()
    {
        return self::belongsTo(Registration::class);
    }
}
