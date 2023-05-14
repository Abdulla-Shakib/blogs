<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if ($updateMode)
        @include('livewire.update_sub_category')
    @else
        @include('livewire.create_sub_category')
    @endif

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>No.</th>
                <th>Category</th>
                <th>Name</th>
                <th>Note</th>
                <th>Status</th>
                <th width="150px">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($sub_categories as $key => $item)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $item->category->name }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->note }}</td>
                    <td>
                        <span
                            class="{{ $item->status == '1' ? 'badge bg-success' : 'badge bg-danger' }}">{{ $item->status == '1' ? 'Active' : 'Inactive' }}
                        </span>
                    </td>
                    <td>
                        <button wire:click="edit({{ $item->id }})" class="btn btn-primary btn-sm">Edit</button>
                        <button wire:click="delete({{ $item->id }})" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
            @empty
                <tr class="text-center">
                    <td colspan="6">
                        <h5 class="font-weight-bold">No Data Available</h5>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
