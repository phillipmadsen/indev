<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="News",
 *      required={title},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="title",
 *          description="title",
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
 *          property="datetime",
 *          description="datetime",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="is_published",
 *          description="is_published",
 *          type="boolean"
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
 *          property="lang",
 *          description="lang",
 *          type="string"
 *      )
 * )
 */
class News extends Model
{
    use SoftDeletes;

    public $table = 'news';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'content',
        'slug',
        'datetime',
        'is_published',
        'path',
        'file_name',
        'file_size',
        'lang'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'content' => 'string',
        'slug' => 'string',
        'datetime' => 'date',
        'is_published' => 'boolean',
        'path' => 'string',
        'file_name' => 'string',
        'file_size' => 'integer',
        'lang' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required'
    ];
}
