<?php

namespace Modules\General\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Modules\General\Entities\Subject
 *
 * @property int $subject_id
 * @property string $name_en
 * @property string $name_ar
 * @property string $mark
 * @property string $register_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\Modules\General\Entities\Subject onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Subject whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Subject whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Subject whereMark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Subject whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Subject whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Subject whereRegisterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Subject whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Subject whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Modules\General\Entities\Subject withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\Modules\General\Entities\Subject withoutTrashed()
 * @mixin \Eloquent
 */
class Subject extends Model
{
    use SoftDeletes;
    protected $fillable = ['name_en', 'name_ar','mark','register_id'];
    protected $primaryKey = "subject_id";

    public function register()
    {
        return self::belongsTo(Registration::class,'register_id','register_id');
    }
}
