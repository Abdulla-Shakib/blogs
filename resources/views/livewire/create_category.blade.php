<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Name <span class="text-danger">*</span></label>
        <input type="text" class="form-control mt-2" id="exampleFormControlInput1" placeholder="Enter Name"
            wire:model="name">
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group mt-3">
        <label for="exampleFormControlInput2">Note <span class="text-secondary">[Optional]</span></label>
        <textarea type="text" class="form-control mt-2" id="exampleFormControlInput2" wire:model="note"
            placeholder="Note" class="form-group col-md-4">
                <label for="exampleFormControlInput1">Status</label>
                <select class="form-select mt-2" aria-label="Default select example" wire:model="status">
                    <option selected="" value="" disabled>Select Status</option>
                    @foreach (getStatus() as $status)
                        <option value="{{ $status['value'] }}" {{ $status['value'] == '1' ? 'selected' : '' }}>
                            {{ $status['label'] }}
                        </option>
                    @endforeach
                </select>
            </>"></textarea>
        @error('note')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-4">
        <label for="exampleFormControlInput1">Status  <span class="text-danger">*</span></label>
        <select class="form-select mt-2" aria-label="Default select example" wire:model="status">
            <option selected="" value="" disabled>Select Status</option>
            @foreach (getStatus() as $status)
                <option value="{{ $status['value'] }}" {{ $status['value'] == '1' ? 'selected' : '' }}>
                    {{ $status['label'] }}
                </option>
            @endforeach
        </select>
    </div>
    <button wire:click.prevent="store()" class="btn btn-success mt-3">Save</button>
</form>
