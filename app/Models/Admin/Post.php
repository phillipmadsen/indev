<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Post",
 *      required={},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="author_id",
 *          description="author_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="is_published",
 *          description="is_published",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="is_draft",
 *          description="is_draft",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="has_product_link",
 *          description="has_product_link",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="product_link_nofollow",
 *          description="product_link_nofollow",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="title",
 *          description="title",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="excerpt",
 *          description="excerpt",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="content",
 *          description="content",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="slug",
 *          description="slug",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="meta_title",
 *          description="meta_title",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="fb_title",
 *          description="fb_title",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="gp_title",
 *          description="gp_title",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="meta_keywords",
 *          description="meta_keywords",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="meta_description",
 *          description="meta_description",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="path",
 *          description="path",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="file_name",
 *          description="file_name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="file_size",
 *          description="file_size",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="category_id",
 *          description="category_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="link_to_product_title",
 *          description="link_to_product_title",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="link_to_product",
 *          description="link_to_product",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="lang",
 *          description="lang",
 *          type="string"
 *      )
 * )
 */
class Post extends Model
{
    use SoftDeletes;

    public $table = 'posts';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'author_id',
        'is_published',
        'is_draft',
        'has_product_link',
        'product_link_nofollow',
        'title',
        'excerpt',
        'content',
        'slug',
        'meta_title',
        'fb_title',
        'gp_title',
        'meta_keywords',
        'meta_description',
        'path',
        'file_name',
        'file_size',
        'category_id',
        'link_to_product_title',
        'link_to_product',
        'lang',
        'created_at',
        'updated_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'author_id' => 'integer',
        'is_published' => 'boolean',
        'is_draft' => 'boolean',
        'has_product_link' => 'boolean',
        'product_link_nofollow' => 'boolean',
        'title' => 'string',
        'excerpt' => 'string',
        'content' => 'string',
        'slug' => 'string',
        'meta_title' => 'string',
        'fb_title' => 'string',
        'gp_title' => 'string',
        'meta_keywords' => 'string',
        'meta_description' => 'string',
        'path' => 'string',
        'file_name' => 'string',
        'file_size' => 'integer',
        'category_id' => 'integer',
        'link_to_product_title' => 'string',
        'link_to_product' => 'string',
        'lang' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
