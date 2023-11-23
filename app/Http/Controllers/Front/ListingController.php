<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\Property;
use App\Models\Type;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index(Type $type, Location $location, Request $request)
    {
        if ($request->route()->getName() === 'listing-by-type') {
            $routeAction = $request->route(
                request()->route()->getName(),
                request()->route()->originalParameters()['type']
            );
            $properties = Property::whereBelongsTo($type, 'relatedType')
                ->when($request->sort_by !== null && $request->sort_by === 'price-low-to-high', function (Builder $query) use ($request) {
                    $query->orderBy('price', 'ASC');
                })
                ->when($request->sort_by !== null && $request->sort_by === 'price-high-to-low', function (Builder $query) use ($request) {
                    $query->orderBy('price', 'DESC');
                })
                ->paginate(7);
        } elseif ($request->route()->getName() === 'listing-by-location') {
            $routeAction = $request->route(
                request()->route()->getName(),
                request()->route()->originalParameters()['location']
            );
            $properties = Property::whereBelongsTo($location, 'relatedLocation')
                ->when($request->sort_by !== null && $request->sort_by === 'price-low-to-high', function (Builder $query) use ($request) {
                    $query->orderBy('price', 'ASC');
                })
                ->when($request->sort_by !== null && $request->sort_by === 'price-high-to-low', function (Builder $query) use ($request) {
                    $query->orderBy('price', 'DESC');
                })
                ->paginate(7);
        }


        if ($request->has('sort_by')) {
            $properties->appends([
                'sort_by' => $request->sort_by
            ]);
        }
        return view('pages.listing')
            ->with('properties', $properties)
            ->with('action', $routeAction);
    }
}
