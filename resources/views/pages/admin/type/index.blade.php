<x-layouts.dashboard title="Tipe Property">
    <div class="row">
        <div class="col-md-6 mx-auto">

            <div class="d-flex justify-content-end mb-2">
                <a class="btn btn-primary" href="{{ route('admin.type.create') }}">New</a>
            </div>

            <div class="card">
                <div class="card-body">
                    <table class="table table-centered mb-0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Tipe</th>
                            <th>Jumlah Property</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($types as $type)
                            <tr>
                                <td>{{ $loop->iteration + $types->firstItem() - 1 }}</td>
                                <td>{{ $type->name }} property</td>
                                <td>{{ $type->properties_count }}</td>
                                <td class="table-action">
                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div>
                        {{ $types->links('pagination::bootstrap-5') }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-layouts.dashboard>
