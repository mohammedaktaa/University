<?php

namespace Modules\General\Entities;

use Illuminate\Database\Eloquent\Model;


/**
 * Modules\General\Entities\Category
 *
 * @property int $category_id
 * @property string $name_en
 * @property string $name_ar
 * @property string $code
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $deleted_At
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\General\Entities\Course[] $course
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Category whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Category whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Category whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Category whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Category whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Category whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Category extends Model
{
    protected $fillable = ["name_en", "name_ar", "code"];
    protected $primaryKey = "category_id";

    public function course()
    {
        return $this->hasMany(Course::class,'category_id','category_id');
    }
}
