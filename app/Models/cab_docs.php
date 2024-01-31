<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cab_docs extends Model
{
    protected $table = 'cab_docs';

    public function movDocs()
    {
        return $this->hasMany(MovDoc::class, 'id_cabdoc');
    }
    //use HasFactory;
}
