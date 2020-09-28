<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

/**
 * Class Course
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 *
 * @property int id
 * @property string title
 * @property string excerpt
 * @property string description
 * @property \Carbon\Carbon created_at
 * @property \Carbon\Carbon updated_at
 * @property \Carbon\Carbon deleted_at
 */
class Course extends Model
{
    use HasTranslations, SoftDeletes;

    public $translatable = ['title', 'excerpt', 'description'];
    public $fillable = ['title', 'excerpt', 'description'];
}
