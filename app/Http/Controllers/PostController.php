<?php

namespace App\Http\Controllers;

use App\Services\PostService;
use Config;

class PostController extends Controller
{
    /**
     * @var PostService
     */
    private $postService;

    /**
     * PostController constructor.
     * @param PostService $postService
     */
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }


    /**
     * Display a listing of the resource.
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data['title'] = $this->postService->showTitle($id, 'no title');
        Config::get('app.locale');
        return view('post.index', $data);
    }
}
