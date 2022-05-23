<?php

namespace App\Http\Controllers;


use App\Http\Requests\CommentsRequest;
use App\Models\Entities\Article;
use App\Models\Entities\Category;
use App\Models\Entities\Comment;
use App\Models\Entities\Page;
use App\Models\Services\CommentsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class PageController extends BaseController
{

	public function curiculum()
	{
    return view('page.curiculum');
	}

}
