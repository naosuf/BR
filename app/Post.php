<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title',
        'body',
    ];
    
    public function getByLimit(int $limit_count = 10)
    {
    // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get(1);
    }   
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
    // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
   
}
