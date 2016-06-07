<?php

namespace Mi2\Emr\OpenEMR\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function documents()
    {
        return $this->belongsToMany( 'Mi2\Emr\OpenEMR\Eloquent\Document', 'categories_to_documents', 'category_id', 'document_id' );
    }
}
