<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

/**
 * @property-read int $id
 * @property string $name
 * @property int $index
 * @property-read Carbon $updated_at;
 * @property-read Carbon $created_at
 * @property Collection items
 *
 * @method static Builder ordered(string $direction = 'asc')
 */
class PriceListCategory extends Model implements Sortable
{
    use HasFactory;
    use SortableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'name',
        'index',
    ];

    /**
     * Settings for the sortable feature.
     *
     * @var array
     */
    public array $sortable = [
        'order_column_name' => 'index',
        'sort_when_creating' => true,
    ];

    /**
     * The has-many relationship with the price list items.
     *p
     *
     * @return HasMany
     */
    public function items(): HasMany
    {
        return $this->hasMany(
            PriceListItem::class,
            'price_list_category_id',
            'id',
        );
    }
}
