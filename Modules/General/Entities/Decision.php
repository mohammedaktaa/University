<?php

namespace Modules\General\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Modules\General\Entities\Decision
 *
 * @property int $decision_id
 * @property string $content_en
 * @property string $content_ar
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Decision whereContentAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Decision whereContentEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Decision whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Decision whereDecisionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Decision whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Decision whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Decision extends Model
{
    protected $fillable=['content_en','content_ar'];
    protected $primaryKey="decision_id";
}
