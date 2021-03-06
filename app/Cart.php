<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $table = "cart";
    public $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = ["id", "user_id"];

    public function album()
    {
        return $this->belongsToMany("App\Album", "album_cart")->withPivot("cantidad");
    }
    public function getAlbumPaginatedAttribute()
    {
        return $this->album()->simplePaginate(12);
    }
}
