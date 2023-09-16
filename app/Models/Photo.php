<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Photo extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $primaryKey = "id";
    protected $fillable = ['id', 'photos', 'title'];

    public static function generatePhotoId(int $length = 11): string
    {
        $photo_id = Str::random($length);
        $exists = DB::table('photos')
            ->where('id', '=', $photo_id)
            ->get(['id']);
        if (isset($exists[0]->photo_id)) 
        {
            return self::generatePhotoId();
        }
        return $photo_id;
    }
}
