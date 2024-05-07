<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Category; // Import Model Category

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // Constructor của Controller
    public function __construct()
    {
        // Truy vấn danh sách categories và chia sẻ nó với tất cả các view
        $categoryList = Category::all(); 
        view()->share('categoryList', $categoryList);
    }
}