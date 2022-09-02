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
}
