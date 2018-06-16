<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $product_id
 * @property int $sales_person_id
 * @property string $sold_record
 * @property int $unit
 * @property string $date_sold
 * @property string $created_at
 * @property string $updated_at
 * @property Product $product
 * @property User $user
 */
class ProductLog extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product_status_logs';

    /**
     * @var array
     */
    protected $fillable = ['product_id', 'sales_person_id', 'sold_record', 'unit', 'date_sold', 'created_at', 'updated_at'];

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
        return $this->belongsTo('App\User', 'sales_person_id');
    }
}
