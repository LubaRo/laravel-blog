<?php


namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{
    public ?string $title;
    public ?string $excerpt;
    public ?string $date;
    public ?string $body;
    public string $slug;

    /**
     * Post constructor.
     * @param ?string $title
     * @param ?string $excerpt
     * @param ?string $date
     * @param ?string $body
     * @param string $slug
     */
    public function __construct(?string $title, ?string $excerpt, ?string $date, ?string $body, string $slug)
    {
        $this->title   = $title;
        $this->excerpt = $excerpt;
        $this->date    = $date;
        $this->body    = $body;
        $this->slug    = $slug;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public static function findAll()
    {
        $files = File::files(resource_path("posts"));

        return collect($files)
            ->map(fn($path) => YamlFrontMatter::parseFile($path))
            ->map(fn($document) => new self(
                $document->title,
                $document->excerpt,
                $document->date,
                $document->body(),
                $document->slug
            ));
    }

    /**
     * @param string $slug
     * @return mixed
     * @throws \Exception
     */
    public static function find(string $slug)
    {
        return static::findAll()->firstWhere('slug', $slug);
    }
}
