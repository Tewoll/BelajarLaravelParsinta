<div class="card">
    <div class="card-header">
        <h3 class="card-title">New Posts</h3>
    </div>
    <div class="card-body">
        <form wire:submit="save">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input wire:model="title" type="text" class="form-control" id="title" placeholder="Posts Title">
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Body</label>
                <textarea wire:model="body" class="form-control" id="body" rows="3"></textarea>
                @error('body')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button class="btn btn-primary btn-xs">Save</button>
        </form>
    </div>
</div>
