<?php

namespace App\Http\Controllers;

use App\Helpers\ApiFormatter;
use App\Models\News;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class APIController extends Controller
{
  
  public function News(News $news){  
    return ApiFormatter::createApi(200,"Success",$news);
  }

}
