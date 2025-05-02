<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoryController extends Controller
{
    public function inventory_management_view(){
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        // Or safely access the user
        $user = auth()->user();
        $items = Inventory::all();
        return view('admin.inventory_management', compact('items'));
    }

    public function productView() {
        $items = Inventory::where('stock', '>', 0)->get();
        return view('inventory.products', compact('items'));
    }



    public function add_inventory() {
        return view('admin.add_inventory');
    }

    public function store(Request $request)
    {
        // Validate incoming data
        $validated = $request->validate([
            'product_name' => 'required|string|max:255',
            'product_description' => 'required|string',
            'product_category' => 'required|string|max:100',
            'stock' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|max:2048',
        ]);

        // If there is an image, store it and add it to the validated data
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $imageName);
            $validated['image'] = $imageName;
        }

        // Create new inventory item
        Inventory::create($validated);

        // Redirect back to inventory management page
        return redirect()->route('inventory-management')->with('success', 'Inventory item added!');
    }

}
