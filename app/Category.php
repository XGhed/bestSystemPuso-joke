<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use SoftDeletes;

    protected $table = 'category';
    protected $primaryKey = 'CategoryID';
    protected $dates = ['deleted_at'];
    public $timestamps = false;
}//ALTER TABLE `category` ADD `deleted_at` DATETIME NULL DEFAULT NULL
