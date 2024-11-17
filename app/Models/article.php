<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'my_articles';

      /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'article_id';

     /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;
}
