<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

/**
 * @property-read int $id
 * @property int $category_id
 * @property string $title
 * @property string $description
 * @property string $price
 * @property int $index
 * @property-read Carbon $updated_at
 * @property-read Carbon $created_at
 * @property PriceListCategory $category
 */
class PriceListItem extends Model implements Sortable
{
    use HasFactory;
    use SortableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'title',
        'description',
        'price',
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
     * The belongs-to relationship with the category.
     *
     * @return BelongsTo<PriceListCategory>
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(PriceListCategory::class, 'id', 'price_list_category_id');
    }
}
