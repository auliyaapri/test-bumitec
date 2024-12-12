<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Sparepart;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SparepartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function create()
    {
        
        $suppliers = Supplier::all();
        $categories = Category::all();
        return view('sparepart.create', [
            "suppliers" => $suppliers,
            "categories" => $categories,

        ]);
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'description' => 'required|string|max:500',
            'supplier_id' => 'required|exists:suppliers,id',
            'category_id' => 'required|exists:categories,id',
        ]);


        Sparepart::create([
            'name' => $request->name,
            'code' => $request->code,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'description' => $request->description,
            'supplier_id' => $request->supplier_id,  
            'category_id' => $request->category_id,  
        ]);

        return redirect()->route('spareparts');
    }
    public function show(string $id)
    {
        $suppliers = Supplier::all();
        $categories = Category::all();

        $sparepart = Sparepart::with(['supplier', 'category'])->findOrFail($id);
    
        return view('sparepart.detail', [
            'sparepart' => $sparepart,
            'suppliers' => $suppliers,
            'categories' => $categories,
        ]);
    }
    

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'description' => 'required|string|max:500',
            'supplier_id' => 'required|exists:suppliers,id', 
            'category_id' => 'required|exists:categories,id',
        ]);
    
        $sparepart = Sparepart::findOrFail($id);
        $sparepart->update([
            'name' => $request->name,
            'code' => $request->code,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'description' => $request->description,
            'supplier_id' => $request->supplier_id, 
            'category_id' => $request->category_id,
        ]);
    
        return redirect()->route('/');
    }

    public function destroy(string $id)
    {
        $sparepart = Sparepart::findOrFail($id);
        $sparepart->delete();
        return redirect()->route('/');


    }
}
