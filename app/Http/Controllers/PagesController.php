<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\DB;

class PagesController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private $phrases = [
        'header' => 'Blog page',
        'user_name' => 'Valters',
        'pop_posts' => [
            ['name' => 'Lorem', 'pic' => 'workshop.jpg', 'txt' => 'Sed mattis nunc'],
            ['name' => 'Ipsum', 'pic' => 'gondol.jpg', 'txt' => 'Praes tinci sed'],
            ['name' => 'Dorum', 'pic' => 'skies.jpg', 'txt' => 'Ultricies conguec'],
            ['name' => 'Mingsum', 'pic' => 'rock.jpg', 'txt' => 'Lorem ipsum dipsum']
        ]
    ];

    public function main()
    {
        $this->phrases['posts']= Post::orderBy('id', 'desc')->get();
        $this->phrases['header'] = 'My Blog';
        return view('blog', ['initial'=> $this->phrases]);
    }

    public function cv(){
        return view('pages.cv');
    }

    public function alarm(){
        return view('pages.alarm');
    }

    public function post($id)
    {
        $post = POST::findOrFail($id);
        return view('pages.post', compact('post'));
    }
}
