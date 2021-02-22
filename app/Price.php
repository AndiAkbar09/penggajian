<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $table ='prices';
    protected $guarded = [];

    public function type()
    {
        return $this->belongsto(Type::class);
    }
    
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
