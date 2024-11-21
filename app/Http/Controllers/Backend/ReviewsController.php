<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Reviews;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function review(){
        $reviews = Reviews::all();
        return view('backend.admin.review', compact('reviews'));
    }
}
