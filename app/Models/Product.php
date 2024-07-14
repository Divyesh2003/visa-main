<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductType;
use App\Models\Category;
use App\Models\Vendor;
use App\Models\Comment;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = [
        'category_id',
        'subcategory_id',
        'name',
        'slug',
        'description',
        'image',
        'gallery',
        'available_strength',
        'trade_name',
        'packing',
        'pack_insert_leaflet',
        'production_capacity',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'status'
    ];
    public function type()
    {
        return $this->belongsTo(ProductType::class,'type_id','id');
    }

    public function attributeGroup()
    {
        return $this->belongsTo(AttributeGroup::class,'attribute_group_id','id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_products');
    }

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class, 'attribute_values')->withPivot('attribute_value');
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class,'vendor_id','id');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }

    public function attributevalue()
    {
        return $this->hasMany(AttributeValue::class,'product_id','id');
    }

    public function attributeAndvalue()
    {
        return $this->hasManyThrough(Attribute::class,AttributeValue::class,'attribute_id','id');
    }

    public function children()
    {
        return $this->hasMany(Product::class, 'parent_id');
    }
    
    public function parents()
    {
        return $this->belongsTo(Product::class,'parent_id');
    }
}
