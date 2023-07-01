<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Get the subcategories associated with the category.
     */
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }

}
