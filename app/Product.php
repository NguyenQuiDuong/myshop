<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $category_id
 * @property string $barcode
 * @property string $name
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property ProductCategory $productCategory
 * @property ProductImport[] $productImports
 * @property ProductStatusLog[] $productStatusLogs
 */
class Product extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['category_id', 'barcode', 'name', 'description', 'import_price', 'retail_price', 'trade_price', 'quantity', 'unit','created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productCategory()
    {
        return $this->belongsTo('App\ProductCategory', 'category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productImports()
    {
        return $this->hasMany('App\ProductImport');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStatusLogs()
    {
        return $this->hasMany('App\ProductStatusLog');
    }
}
