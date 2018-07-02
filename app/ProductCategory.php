<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $parent_id
 * @property string $name
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property ProductCategory $productCategory
 * @property Product[] $products
 */
class ProductCategory extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['parent_id', 'name', 'description', 'created_at', 'updated_at'];

    /**
     * Use to replace message for validate
     * @var array
     */
    public const MESSAGES = [
        'name.required' => 'Name is required',
        'name.between' => 'Name must have length small than 100 character',
        'description.required' => 'Description is required',
        'parent_id.numeric' =>  'Parent Id must is numeric'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productCategory()
    {
        return $this->belongsTo('App\ProductCategory', 'parent_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany('App\Product', 'category_id');
    }
}
