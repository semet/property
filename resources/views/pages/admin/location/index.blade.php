<x-layouts.dashboard title="Lokasi">
    <div class="row">
        <div class="col-md-10 mx-auto">

            <div class="d-flex justify-content-end mb-2">
                <a class="btn btn-primary" href="{{ route('admin.location.create') }}">New</a>
            </div>

            <div class="card">
                <div class="card-body">
                    <table class="table table-centered mb-0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Lokasi</th>
                            <th>Alamat</th>
                            <th>Jumlah Properti</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($locations as $location)
                            <tr>
                                <td>{{ $loop->iteration + $locations->firstItem() - 1 }}</td>
                                <td>{{ $location->name }} </td>
                                <td>{{ $location->address }} </td>
                                <td>{{ $location->properties_count }} property</td>
                                <td class="table-action">
                                    <a href="{{ route('admin.location.edit', $location->slug) }}" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="mt-2">
                        {{ $locations->links('pagination::bootstrap-5') }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-layouts.dashboard>
