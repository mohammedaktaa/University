<?php

namespace Modules\General\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Modules\General\Entities\State
 *
 * @property int $state_id
 * @property string $name_en
 * @property string $name_ar
 * @property int $country_id
 * @property \Carbon\Carbon|null $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\State whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\State whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\State whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\State whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\State whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\State whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\State whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class State extends Model
{
    protected $primaryKey="state_id";
    protected $fillable=["country_id","name_en","name_ar"];
    protected $dates = ['deleted_at'];

    public function country(){
        return self::belongsTo(Country::class,'country_id','country_id');
    }
    public function cities(){
        return self::hasMany(City::class,'state_id','state_id');
    }
    public function university(){
        return self::hasMany(University::class,'state_id','state_id');
    }
}
