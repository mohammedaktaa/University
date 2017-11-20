<?php

namespace Modules\General\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Modules\General\Entities\MenuItem
 *
 * @property int $menu_item_id
 * @property string $name_en
 * @property string $name_ar
 * @property int|null $parent_id
 * @property string $is_root
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property string|null $target
 * @property string|null $classes
 * @property string|null $order
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\MenuItem whereClasses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\MenuItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\MenuItem whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\MenuItem whereIsRoot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\MenuItem whereMenuItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\MenuItem whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\MenuItem whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\MenuItem whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\MenuItem whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\MenuItem whereTarget($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\MenuItem whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class MenuItem extends Model
{
    protected $fillable = ['name_en', 'name_ar', 'parent_id', 'is_root','target','classes','order'];
    protected $primaryKey = "menu_item_id";

    public function parent()
    {
        return self::belongsTo(self::class, 'parent_id');
    }

    public function children()
    {
        return self::hasMany(self::class, 'parent_id', 'menu_item_id')->orderBy('order');
    }
}
