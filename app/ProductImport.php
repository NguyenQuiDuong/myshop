<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $product_id
 * @property int $user_id
 * @property int $import_price
 * @property int $retail_price
 * @property int $trade_price
 * @property int $quantity
 * @property int $unit
 * @property string $date_import
 * @property string $created_at
 * @property string $updated_at
 * @property Product $product
 * @property User $user
 */
class ProductImport extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['product_id', 'user_id', 'import_price', 'retail_price', 'trade_price', 'quantity', 'unit', 'date_import', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
