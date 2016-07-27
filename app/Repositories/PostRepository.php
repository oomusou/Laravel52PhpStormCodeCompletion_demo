<?php

declare(strict_types = 1);

namespace App\Repositories;

use App\Post;
use Illuminate\Database\Eloquent\Collection;

class PostRepository
{
    /**
     * @param int $id
     * @param string $default
     * @return string
     */
    public function getTitle(int $id, string $default) : string
    {
        return Post::whereId($id)
            ->get()
            ->first(null, new Post(['title' => $default]))
            ->title;
    }

    /**
     * @return Collection|Post[]
     */
    public function getAllPosts() : Collection
    {
        return Post::all();
    }
}