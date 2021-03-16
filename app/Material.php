<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public function parent()
    {
        // belongsto mối quan hệ nghịch đảo một danh mục con  chỉ ở 1 danh mục cha
        return $this->belongsTo("App\Material", "parent_id");
    }

}
