<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function getCategory()
    {
        return $this->hasOne('App\Models\CompanyCategory', 'id', 'company_category_id');
    }
    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }
}
