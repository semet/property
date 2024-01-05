<x-layouts.dashboard title="Property">
    <div class="row">
        <div class="col-md-10 mx-auto">

            <div class="d-flex justify-content-end gap-2 mb-2">
                <form action="">
                    <select name="location_id" id="location_id" class="form-select">
                        <option value="">Pilih Lokasi</option>
                        @foreach($locations as $location)
                            <option value="{{ $location->id}}">{{ $location->name }}</option>
                        @endforeach
                    </select>
                </form>

                <a class="btn btn-primary" href="{{ route('admin.agent.create') }}">New</a>
            </div>

            <div class="card">
                <div class="card-body">
                    <table class="table table-centered mb-0" id="agents-table">
                        <thead>
                        <tr>
                            <th>Nama</th>
                            <th>No.Telepon</th>
                            <th>Email</th>
                            <th>Jumlah Properti</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('assets/admin/js/pages/property.js') }}"></script>
    @endpush
</x-layouts.dashboard>
