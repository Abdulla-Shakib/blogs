<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class Categories extends Component
{
    public $categories, $name, $note, $status, $category_id;
    public $updateMode = false;
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public function render()
    {
        $this->categories = Category::query()->latest()->get();
        
        return view('livewire.categories');
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){
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
            'name' => 'required',
            'note' => 'nullable',
            'status' => 'required',
        ]);
  
        Category::create($validatedDate);
  
        session()->flash('message', 'Category Created Successfully.');
  
        $this->resetInputFields();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $categories = Category::findOrFail($id);
        $this->category_id = $id;
        $this->name = $categories->name;
        $this->note = $categories->note;
        $this->status = $categories->status;
  
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
            'name' => 'required',
            'note' => 'nullable',
            'status' => 'required',
        ]);
  
        $post = Category::find($this->category_id);
        $post->update([
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
        Category::find($id)->delete();
        session()->flash('message', 'Category Deleted Successfully.');
    }
}
