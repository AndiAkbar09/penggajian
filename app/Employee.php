<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','nip','nama','jabatan','agama','tempat_lahir',
        'tanggal_lahir','alamat','status','jenis_kelamin','no_telp',
        'keterangan'];

    public function types()
    {
        return $this->hasMany(Type::class);
    }
}
