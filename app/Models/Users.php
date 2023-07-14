<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Users extends Model
{
    use HasFactory;
    protected $table = 'users';
    public $timestamps = false;
    protected $primarykey = 'id';
    protected $fillable = [
        'name',
        'email',
        'role',
    ];

    public function users(){
        return $this->hasMany(Users::class);
    }

    public function getAllData(){
        $alldata = DB::table('users')
        ->select('users.*')
        ->get();
        return $alldata;
    }
}
