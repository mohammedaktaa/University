<?php

namespace Modules\General\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Modules\General\Entities\Differentiation
 *
 * @property int $differentiation_id
 * @property string|null $name_en
 * @property string|null $name_ar
 * @property string|null $year
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\Modules\General\Entities\Differentiation onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Differentiation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Differentiation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Differentiation whereDifferentiationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Differentiation whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Differentiation whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Differentiation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Differentiation whereYear($value)
 * @method static \Illuminate\Database\Query\Builder|\Modules\General\Entities\Differentiation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\Modules\General\Entities\Differentiation withoutTrashed()
 * @mixin \Eloquent
 */
class Differentiation extends Model
{
    use SoftDeletes;
    protected $fillable = ['name_en', 'name_ar', 'year'];
    protected $primaryKey = "differentiation_id";

    public function faculty()
    {
        return self::belongsToMany(Faculty::class, 'differentiation_faculties', ' differentiation_id', 'faculty_id');
    }

    public function university()
    {
        return self::belongsToMany(University::class,'differenation_universities','differenation_id','university_id');
    }
}
