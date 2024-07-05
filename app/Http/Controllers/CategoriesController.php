<?php

namespace App\Http\Controllers;

use App\Http\Requests\category\StorecategoriesRequest;
use App\Http\Requests\category\UpdatecategoriesRequest;
use App\Models\category;
use Symfony\Component\HttpFoundation\Response;

class CategoriesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $categories = Category::all();
        return response()->json(['success'=> $categories], Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\category\StorecategoriesRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StorecategoriesRequest $request)
    {
        $validator = $request->validated();

        try {
            Category::create([
                'name' => $validator['name'],
            ]);
        }catch (\Exception $e){
            return response()->json(['error' => $e->getMessage()], 500);
        }

        return response()->json($validator, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function getRecentArticles(Category $category)
    {
        try {
            $articles = $category->articles()
                ->orderBy('created_at', 'desc')
                ->limit(5)
                ->get();

            return response()->json(['success' => $articles], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Category not found'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\category\UpdatecategoriesRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateCategory(UpdatecategoriesRequest $request, Category $category)
    {
        $validateCategory = $request->validated();

        try {
            $category->update($validateCategory);
        }catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return response()->json($category, Response::HTTP_ACCEPTED);
    }

    public function updateArticleCategory(UpdatecategoriesRequest $request, Category $category)
    {
        $validateCategory = $request->validated();

        try {
            $category->update($validateCategory);
        }catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

        return response()->json($category, Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(category $category)
    {
        $category->delete();
        return response()->json($category::all());
    }
}
