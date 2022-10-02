@extends('layouts.app')

@section('title') Resumes @stop

@section('content')
    <div class="row mx-3">
        <div class="card col-lg-12">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-12">
                        <h6>User Data List</h6>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-auto" style="height: 100px;" id="banners">
                    <thead>
                        <tr>
                            <th class="align-middle">s/N</th>
                            <th class="align-middle">Full Name</th>
                            <th class="align-middle">Email Address</th>
                            <th class="align-middle">Contact Number</th>
                            <th class="align-middle">Job Function</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($resumes as $key => $item)
                            <tr>
                                <td class="align-middle">{{ ++$key }}</td>
                                <td class="align-middle">
                                    <span>{{ $item->fullname }}</span>
                                </td>
                                <td class="align-middle">{{ $item->email }}</td>
                                <td class="align-middle">
                                    <div class="row">
                                        <span>{{ $item->phone }}</span><br>
                                        <span>{{ $item->mobile_no }}</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge badge-primary">{{ $item->domain->name }}</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop

@push('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" type="text/css">
@endpush

@push('js')
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#banners').DataTable();
        });
    </script>
@endpush