<div>
    {{-- @if (session()->has('message'))
        <div class="alert alert-info">
            {{ session('message') }}
        </div>
    @endif --}}
    @if (flash()->message)
        <div class="alert alert-{{ flash()->class }}" role="alert">
            {{ flash()->message }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">New Post</h3>
        </div>
        <div class="card-body">
            <form wire:submit="save">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Title</label>
                    <input wire:model="form.title" type="text" class="form-control" id="title"
                        placeholder="Title">
                    @error('form.title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Body</label>
                    <textarea wire:model="form.body" class="form-control" id="body" rows="3"></textarea>
                    @error('form.body')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-primary btn-xs">Simpan Aja</button>
            </form>
        </div>
    </div>
</div>
