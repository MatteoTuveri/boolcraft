<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();
        return view('admin.items.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemRequest $request)
    {
        $formData = $request->validated();
        $slug = strtolower($formData['slug']);
        $formData['slug'] = $slug;
        $item = Item::create($formData);
        return redirect()->route('items.show', $item->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        return view('admin.items.show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        return view('admin.items.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemRequest $request, Item $item)
    {
        $formData = $request->validated();
        $slug = strtolower($formData['slug']);
        $formData['slug'] = $slug;
        $item = Item::create($formData);
        return redirect()->route('items.show', $item->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return to_route('items.index')->with('message',"$item->name delete");
    }
}
