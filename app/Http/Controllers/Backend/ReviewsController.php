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

    public function reviewDelete($id_reviews)
    {
        $reviews = reviews::find($id_reviews);
        $reviews->delete();

        if (!$reviews) {
            return redirect()->back()->with('error', 'Data reviews tidak ditemukan.');
        }

        $reviews->delete();

        return redirect()->back()->with('success', 'Data reviews berhasil dihapus.');
    }
}
