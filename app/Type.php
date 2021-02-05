<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'types';
    protected $primaryKey = "id";
    protected $fillable = [
        'id','employee_id','hadir','sakit','izin','alpha','lembur'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

}
