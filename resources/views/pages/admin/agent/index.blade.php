<x-layouts.dashboard title="Agen">
    <div class="row">
        <div class="col-md-10 mx-auto">

            <div class="d-flex justify-content-end mb-2">
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
        <script src="{{ asset('assets/admin/js/pages/agent-datatable.js') }}"></script>
    @endpush
</x-layouts.dashboard>
