<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    //Белый Список
    protected $fillable = ['title', 'slug', 'parent_id' , 'published', 'created_by', 'modified_by'];

    //Формирование уникального значения из Title(Mutators)

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug( mb_substr($this->title, 0, 40) . "-" . \Carbon\Carbon::now()->format('dmyHi'), '-');
    }

    //Get children category
    public  function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }
}
