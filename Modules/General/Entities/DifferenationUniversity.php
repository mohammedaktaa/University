<?php

namespace Modules\General\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Modules\General\Entities\DifferenationUniversity
 *
 * @property int $id
 * @property int $differentiation_id
 * @property int $university_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\DifferenationUniversity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\DifferenationUniversity whereDifferentiationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\DifferenationUniversity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\DifferenationUniversity whereUniversityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\DifferenationUniversity whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DifferenationUniversity extends Model
{
    protected $fillable = ['university_id', 'differentiation_id'];

    public function university()
    {
        return self::belongsTo(University::class,'university_id','university_id');
    }

    public function differenation()
    {
        return self::belongsTo(Differentiation::class,'differentiation_id','differentiation_id');
    }
}
