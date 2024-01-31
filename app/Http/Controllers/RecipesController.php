<?php

namespace App\Http\Controllers;

use App\Models\Recipes;
use App\Models\Categories;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $columns = ['title', 'content', 'category_id', 'image'];
    public function index()
    {
        // $test = Test::get();
        $recipes = Recipes::with('category')->get();
        // $test = Test::get();

        return view('index', compact('recipes'));
    }
    public function adminIndex()
    {
        // $test = Test::get();
        $recipes = Recipes::with('category')->get();
        // $test = Test::get();

        return view('admin.index', compact('recipes'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categories::all();
        return view('admin.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required|string',
            'title' => 'required|string',
            'category_id' => 'required'
        ], [
            'image.required' => 'The image is required.',
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif, svg.',
            'image.max' => 'The image may not be greater than 2MB in size.',
            'content.required' => 'The content is required.',
            'title.required' => 'The title is required.',
            'category_id.required' => 'The category is required.'
        ]);


        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $imageName);

        Recipes::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imageName,
            'category_id' => $request->category_id,
        ]);

        return back()
            ->with('success', 'You have successfully Created Recipes.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $recipe =   Recipes::find($id);
        // dd($recipe);
        return view('show', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $recipe = Recipes::find($id);
        $categories = Categories::all();
        return view('admin.edit', ['categories' => $categories, 'recipe' => $recipe]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validation rules
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required|string',
            'title' => 'required|string',
            'category_id' => 'required'
        ], [
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif, svg.',
            'image.max' => 'The image may not be greater than 2MB in size.',
            'content.required' => 'The content is required.',
            'title.required' => 'The title is required.',
            'category_id.required' => 'The category is required.'
        ]);

        // Find the recipe by ID
        $recipe = Recipes::findOrFail($id);

        // Process image upload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images'), $imageName);
            $recipe->image = $imageName;
        }

        // Update recipe data
        $recipe->title = $request->title;
        $recipe->content = $request->content;
        $recipe->category_id = $request->category_id;
        $recipe->save();

        return back()->with('success', 'You have successfully updated the recipe.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Recipes::where('id', $id)->delete($id);
        return redirect('admin');
    }
}
