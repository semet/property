<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $properties = Property::where('location', $request->location)
            ->when($request->has('status'), function (Builder $query) use ($request) {
                $query->where('status', ucfirst($request->status));
            })
            ->when($request->type !== 'semua', function (Builder $query) use ($request) {
                $query->where('type', $request->type);
            })
            ->when($request->sort_by !== null && $request->sort_by === 'price-low-to-high', function (Builder $query) use ($request) {
                $query->orderBy('price', 'ASC');
            })
            ->when($request->sort_by !== null && $request->sort_by === 'price-high-to-low', function (Builder $query) use ($request) {
                $query->orderBy('price', 'DESC');
            })
            ->paginate(7);

        $properties->appends($request->query());

        return view('pages.search-result')
            ->with('properties', $properties);
    }
}
