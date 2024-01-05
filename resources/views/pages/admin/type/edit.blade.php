<x-layouts.dashboard title="Edit Tipe Property">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.type.update', $type->slug) }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Tipe</label>
                            <input type="text" id="name" name="name" value="{{ $type->name }}" class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-center gap-2">
                            <button class="btn btn-primary" type="submit">Save</button>
                            <a href="{{ route('admin.type.index') }}" class="btn btn-danger">Cancle</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</x-layouts.dashboard>
