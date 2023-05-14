<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\SubCategory;

class Tasks extends Component
{
    public $category;
    public $subcategory;
    public $category_id;

    public function render()
    {
        $this->category = Category::query()->active()->latest()->get();
        $this->subcategory = SubCategory::query()
            ->active()
            ->where('category_id', $this->category_id)
            ->get();
        return view('livewire.tasks');
    }

    // public function updatedCategoryId()
    // {
    //     $this->subcategory = SubCategory::where('category_id', $this->category_id)->get();
    // }
}
