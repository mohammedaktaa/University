<?php

namespace Modules\General\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Modules\General\Entities\City
 *
 * @property int $city_id
 * @property int $state_id
 * @property string $name_en
 * @property string $name_ar
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\City whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\City whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\City whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\City whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\City whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\City whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\City whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class City extends Model
{
    protected $primaryKey="city_id";
    protected $fillable=["state_id","name_en","name_ar"];
    protected $dates = ['deleted_at'];

    public function state(){
        return self::belongsTo(State::class,'state_id','state_id');
    }
}
