<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    // highlight,best_seller
    const SEGMENT_MAPS = array(
        'Öne çıkanlar' => 'pro-label new-label',
        'Çok satanlar' => 'pro-label best-label',
        'İndirimli' => 'pro-label discount-label',
    );

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function productImages(): HasMany
    {
        return $this->hasMany(ProductImage::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    public function getLabels()
    {
        foreach (explode(',', $this->segment) as $segment) {
            return '<span class="'.self::SEGMENT_MAPS[$segment].'">'.$segment.'</span>';
        }
    }
    
}
