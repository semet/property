<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TypeRequest;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::orderBy('name')->withCount('properties')->paginate(10);

        return view('pages.admin.type.index')->with('types', $types);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TypeRequest $request)
    {
        Type::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);

        return redirect()
            ->route('admin.type.index')
            ->with('success', 'Input data Tipe berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        return view('pages.admin.type.edit')->with('type', $type);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TypeRequest $request, Type $type)
    {
        $type->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);

        return redirect()
            ->route('admin.type.index')
            ->with('success', 'Update data Tipe berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        $type->delete();

        return redirect()
            ->route('admin.type.index')
            ->with('success', 'Data Tipe berhasil dihapus');
    }
}
