<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKasbond extends Model
{
    use HasFactory;
    protected $table = "data_kasbond";
    public $timestamps = false;


    public function MasterData()
    {
        return $this->belongsTo(MasterData::class,  'id_master_data', 'id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
