<?php

namespace Modules\General\Entities;

use App\User;
use Illuminate\Database\Eloquent\Model;


/**
 * Modules\General\Entities\Country
 *
 * @property int $country_id
 * @property string|null $code_2
 * @property string|null $code_3
 * @property string|null $name_en
 * @property string|null $name_ar
 * @property string|null $nationality_en
 * @property string|null $nationality_ar
 * @property string $active
 * @property string|null $supported
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Country whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Country whereCode2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Country whereCode3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Country whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Country whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Country whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Country whereNationalityAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Country whereNationalityEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Country whereSupported($value)
 * @mixin \Eloquent
 */
class Country extends Model
{
    protected $primaryKey="country_id";
    protected $fillable=["code_2","	code_3","name_en","name_ar","active","supported","nationality_en","nationality_ar"];
    public $timestamps=false;
    const PREFIX_FIELD="code_2";
    public function states(){
        return self::hasMany(  State::class,'country_id','country_id');
    }
    public function users(){
        return self::hasMany(User::class,'country_id','country_id');
    }
    public function user(){
        return self::users()->where('id',\Auth::id());
    }
}
