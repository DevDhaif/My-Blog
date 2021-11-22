<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use function PHPSTORM_META\map;

class Post
{
    public $title;
    public $excerpt;
    public $date;
    public $body;
    public $author;
    public $slug;
    public $time;


    public function __construct($title, $excerpt, $date, $body, $author, $slug, $time)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->author = $author;
        $this->slug = $slug;
        $this->time = $time;
    }
    public static function all()
    {
        return cache()->remember('posts.all', 5, function () {
            return collect(File::files(resource_path("posts")))
                ->map(fn ($file) => YamlFrontMatter::parseFile($file))
                ->map(fn ($doc) => new Post(
                    $doc->title,
                    $doc->excerpt,
                    $doc->date,
                    $doc->body(),
                    $doc->author,
                    $doc->slug,
                    $doc->time 
                ))->sortByDesc('date');
        });
    }
    public static function find($slug)
    {
        return  static::all()->firstWhere('slug', $slug);
    }
    public static function findOrFail($slug){
        $post=static::find($slug);
        if(! $post){
            throw new ModelNotFoundException();
        }
        return $post;
    }
}
