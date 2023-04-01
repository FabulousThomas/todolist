<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListingController extends Controller
{
    //

    public function index()
    {
        return view( 'index', [
                'heading' => 'Listings',
                'listings' => Listing::latest()->filter(request(['search']))->get()
            ]
        );
    }

    public function listings(Listing $listing)
    {
        return view( '/listings', ['listing' => $listing]
        );
    }
}