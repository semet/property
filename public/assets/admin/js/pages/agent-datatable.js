$(document).ready(function () {
    $('#agents-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: route('admin.agent.index'),
        columns: [
            {data: 'name', name: 'name'},
            {data: 'phone', name: 'phone'},
            {data: 'email', name: 'email'},
            {data: 'location', name: 'location'},
            {
                data: 'actions',
                name: 'actions',
                orderable: true,
                searchable: true
            },
        ]
    })
})
