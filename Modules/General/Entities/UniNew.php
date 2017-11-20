<?php

namespace Modules\General\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Modules\General\Entities\UniNew
 *
 * @property int $new_id
 * @property string $title_en
 * @property string $title_ar
 * @property string $content_en
 * @property string $content_ar
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\UniNew whereContentAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\UniNew whereContentEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\UniNew whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\UniNew whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\UniNew whereNewId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\UniNew whereTitleAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\UniNew whereTitleEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\UniNew whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class UniNew extends Model
{
    protected $table="news";
    protected $fillable=['title_en','title_ar','content_en','content_ar'];
    protected $primaryKey="new_id";
    protected $dates=['created_at','updated_at','deleted_at'];
}
