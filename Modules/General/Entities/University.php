<?php

namespace Modules\General\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Modules\General\Entities\University
 *
 * @property int $university_id
 * @property string $name_en
 * @property string $name_ar
 * @property int $state_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\University whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\University whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\University whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\University whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\University whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\University whereUniversityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\University whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class University extends Model
{
    protected $fillable=['name_en','name_ar','state_id'];
    protected $primaryKey="university_id";

    public function state()
    {
        return self::belongsTo(State::class,'state_id','state_id');
    }

    public function faculty()
    {
        return self::belongsToMany(Faculty::class,'faculty_universities','university_id','faculty_id');
    }

    public function differenation()
    {
        return self::belongsToMany(Differentiation::class, 'differenation_universities', 'university_id', 'differenation_id');
    }
}
