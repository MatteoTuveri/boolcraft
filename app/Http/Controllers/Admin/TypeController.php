<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Type;
use App\Http\Requests\StoreTypeRequest;
use App\Http\Requests\UpdateTypeRequest;
use Illuminate\Support\Facades\Storage;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::all();
        return view('admin.types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTypeRequest $request)
    {
        $form_data = $request->validated();
        if ($request->hasFile('image')) {
            $path = Storage::put('images', $form_data['image']);
            $form_data['image'] = $path;
        }
        $new_type = Type::create($form_data);
        return to_route('admin.types.show', $new_type->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        return view('admin.types.show', compact('type'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        return view('admin.types.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTypeRequest $request, Type $type)
    {
        $form_data = $request->validated();
        if ($request->hasFile('image')) {
            $path = Storage::put('images', $form_data['image']);
            $form_data['image'] = $path;
        }
        $type->fill($form_data);
        $type->update();
        return to_route('admin.types.show', $type->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        if ($type->image) {
            Storage::delete($type->image);
        }
        $type->delete();
        return to_route('admin.types.index')->with('message', "$type->name eliminato con successo");
    }
}
