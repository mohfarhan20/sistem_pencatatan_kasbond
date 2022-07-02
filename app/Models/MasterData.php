<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterData extends Model
{
    use HasFactory;
    protected $table = "master_data";
    public $timestamps = false;

    public function DataKasbond()
    {
        return $this->hasMany(DataKasbond::class, 'id', 'id_master_data');
    }
}
