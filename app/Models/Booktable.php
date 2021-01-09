<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booktable extends Model
{
    use HasFactory;
    protected $table = 'booktable';
    public $timestamps = true;

    protected $fillable = [
        'b_name',
        'b_author',
        'b_desc',
        'b_type',
        'b_genre',
        'b_amazon'
    ];

    public function getKeyName(){
        return "b_id";
    }
}
