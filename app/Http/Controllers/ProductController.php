<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $products = Product::all();
    return view('products.index', compact('products'));
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'details' => 'required',
            'price' => 'required|numeric',
            'photo' => 'required|image|max:2048',
        ]);

        $photoPath = $request->file('photo')->store('public/photos');
        $photoUrl = Storage::url($photoPath);

        $product = Product::create([
            'name' => $validatedData['name'],
            'details' => $validatedData['details'],
            'price' => $validatedData['price'],
            'photo' => $photoUrl,
        ]);

        return redirect()->route('products.show', $product->id)->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'details' => 'required',
            'price' => 'required|numeric',
            'photo' => 'nullable|image|max:2048',
        ]);

        $product = Product::findOrFail($id);

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('public/photos');
            $photoUrl = Storage::url($photoPath);
            $product->update([
                'photo' => $photoUrl,
            ]);
        }

        $product->update([
            'name' => $validatedData['name'],
            'details' => $validatedData['details'],
            'price' => $validatedData['price'],
        ]);

        return redirect()->route('products.show', $product->id)->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //  public function destroy($id)
    //  {
    //      $product = Product::findOrFail($id);
    //      $product->delete();
     
    //      return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    //  }
    public function destroy($id)
{
    Product::destroy($id);
    return redirect()->route('products.index')->with('success', 'Product deleted successfully');

    // redirect to the homepage
    return redirect('/');
}

     
}
