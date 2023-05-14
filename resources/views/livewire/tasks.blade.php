<form>
    <div class="form-group mt-2">
        <label for="exampleFormControlInput1">Category</label>
        <select class="form-select mt-2" aria-label="Default select example" wire:model="category_id">
            <option selected>Select Category</option>
            @foreach ($category as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group mt-3 mb-2">
        <div class="row mt-3">
            @foreach ($subcategory as $item)
                <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <p class="card-text">{{ $item->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</form>
