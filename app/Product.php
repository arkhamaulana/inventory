<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = 'products';
    protected $primaryKey = 'id';
    public $fillable = ['code', 'name', 'details'];
    public $timestamps = false;
}
