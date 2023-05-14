<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\SubCategory;
use Livewire\Component;

class SubCategories extends Component
{
    public $sub_categories, $name, $note, $status, $category, $category_id, $sub_category_id;
    public $updateMode = false;
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $this->category = Category::query()->active()->get();
        $this->sub_categories = SubCategory::query()->latest()->get();
        
        return view('livewire.sub-categories');
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){
        $this->category_id = '';
        $this->name = '';
        $this->note = '';
        $this->status = '';
    }
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $validatedDate = $this->validate([
            'category_id' => 'required',
            'name' => 'required',
            'note' => 'nullable',
            'status' => 'required',
        ]);
  
        SubCategory::create($validatedDate);
  
        session()->flash('message', 'Sub-Category Created Successfully.');
  
        $this->resetInputFields();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $sub_categories = SubCategory::findOrFail($id);
        $this->sub_category_id = $id;
        $this->category_id = $sub_categories->category_id;
        $this->name = $sub_categories->name;
        $this->note = $sub_categories->note;
        $this->status = $sub_categories->status;
  
        $this->updateMode = true;
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function update()
    {
        $validatedDate = $this->validate([
            'category_id' => 'required',
            'name' => 'required',
            'note' => 'nullable',
            'status' => 'required',
        ]);
  
        $sub_categories = SubCategory::find($this->sub_category_id);
        $sub_categories->update([
            'category_id' => $this->category_id,
            'name' => $this->name,
            'note' => $this->note,
            'status' => $this->status,
        ]);
  
        $this->updateMode = false;
  
        session()->flash('message', 'Category Updated Successfully.');
        $this->resetInputFields();
    }
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        SubCategory::find($id)->delete();
        session()->flash('message', 'Sub-Category Deleted Successfully.');
    }
}
