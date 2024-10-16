<?php

// app/Http/Controllers/AdminController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin'); // Áp dụng middleware admin cho tất cả các phương thức trong controller này
    }
    public function index()
    {
        return view('admin.dashboard');
    }
}
