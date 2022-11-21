@extends('layouts.app')

@section('title')
    Contractors
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <table class="table display" style="width: 100%;" id="contractors">
                <thead>
                    <tr>
                        <th class="align-middle">s/N</th>
                        <th class="align-middle">Company</th>
                        <th class="align-middle">Phone</th>
                        <th class="align-middle">Email Address</th>
                        <th class="align-middle">Contracts</th>
                        <th class="align-middle">Area of Speciality</th>
                        <th class="align-middle">Status</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" type="text/css">
@endpush

@push('js')
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#contractors').DataTable({
                dom: 'lBfrtip',
                buttons: [
                    {
                        extend: 'csv',
                        text: 'CSV'
                    },
                    {
                        extend: 'excel',
                        text: 'Excel'
                    },
                    {
                        extend: 'pdf',
                        text: 'PDF'
                    },
                    {
                        extend: 'print',
                        text: 'Print'
                    },
                ],
                order: [[0, 'desc']],
                processing: true,
                serverSide: true,
                aLengthMenu: [[ 15, 25, 100, -1 ], [ 15, 25, 100, "All" ]],
                paging: true,
                iDisplayLength: 15,
                searchable: true,
                responsive: true,
                autoWidth: false,
                ordering: true,
                ajax: "{!! route('contractors.index') !!}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'company_name', 'render': function(data, type, row, meta){
                        return `<a href="/contractors/${row.slug}">${data}</a>`
                    }},
                    {data: 'phone', name: 'phone'},
                    {data: 'email', name: 'email'},
                    {data: 'contract_deployed', name: 'contract_deployed'},
                    {data: 'speciality', name: 'speciality'},
                    {data: 'status', 'render': function(data, type, row, meta){
                        if(data === 0){
                            return `<span class="badge badge-primary">${'PENDING'}</span>`
                        }
                        else if(data === 1){
                            return `<span class="badge badge-warning">${'REVEIWING'}</span>`
                        }
                        else if(data === 2){
                            return `<span class="badge badge-success">${'APPROVED'}</span>`
                        }
                        else if(data === 3) {
                            return `<span class="badge badge-danger">${'DECLINED'}</span>`
                        }
                    }}
                ]
            });
        });
    </script>
@endpush
