<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use App\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\ModelNotFoundException as EloquentModelNotFoundException;

class Post extends Model
{

    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'sub_title',
        'content',
        'body',
        'seller_id'
    ];

    public function author() 
    {
        return $this->belongsTo(Category::class);
    }

    public function category() 
    {
        return $this->belongsTo(Category::class);
    }

        public static function get_all()
        {
            $files = File::files(resource_path("posts/"));

            array_map(function($file){
                return $file->getContents(); },$files);
        }

        public static function find($slug){

            if(! file_exists($path = resource_path("posts/{$slug}.html"))){
                //ddd($slug.' File does not exist');
                throw new EloquentModelNotFoundException();
                return redirect('/post');
            }
        
            return cache()->remember("posts.{$slug}", 300, function() use ($path){
                //var_dump('file_get_contents');
                //return file_get_contents($path);
            
            });
        }
    }

