<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewsController extends Controller
{
    public function submitReview(Request $request)
    {
        // Validasi input
        $request->validate([
            'comment' => 'required|max:500',
            'rating' => 'required',
        ]);

        // Simpan review ke database
        Reviews::create([
            'users_id' => Auth::user()->users_id, // Ambil ID user yang sedang login
            'id_konser' => $request->id_konser, // ID konser dikirim melalui form
            'rating' => $request->rating,
            'comment' => $request->comment,
            'review_date' => now(),
        ]);

        return redirect()->back()->with('success', 'Your review has been submitted.');
    }
}
