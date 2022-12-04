<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @OA\Schema(
 *      schema="Comment",
 *      required={"text","user_id","post_id"},
 *      @OA\Property(
 *          property="text",
 *          description="",
 *          readOnly=false,
 *          nullable=false,
 *          type="string",
 *      ),
 *      @OA\Property(
 *          property="user_id",
 *          description="",
 *          readOnly=false,
 *          nullable=false,
 *          type="integer",
 *          format="int32"
 *      ),
 *      @OA\Property(
 *          property="post_id",
 *          description="",
 *          readOnly=false,
 *          nullable=false,
 *          type="integer",
 *          format="int32"
 *      ),
 *      @OA\Property(
 *          property="created_at",
 *          description="",
 *          readOnly=true,
 *          nullable=true,
 *          type="string",
 *          format="date-time"
 *      ),
 *      @OA\Property(
 *          property="updated_at",
 *          description="",
 *          readOnly=true,
 *          nullable=true,
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */class Comment extends Model
{
    use HasFactory;
    public $table = 'comments';

    public $fillable = [
        'text',
        'user_id',
        'post_id'
    ];

    protected $casts = [
        'text' => 'string',
        'user_id' => 'integer',
        'post_id' => 'integer'
    ];

    public static $rules = [
        'text' => 'required',
        'user_id' => 'required',
        'post_id' => 'required'
    ];

    
}
