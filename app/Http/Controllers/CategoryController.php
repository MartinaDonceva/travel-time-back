<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $categories = Category::with('questions', 'lectures', 'questions.question_answers')->get();

        return JsonResource::collection($categories);
    }

    public function show(Category $category): JsonResource
    {
        $category = Category::query()->where('id', $category->id)->first()
            ->loadMissing('lectures', 'questions', 'questions.question_answers');

        return JsonResource::make($category);
    }
}
