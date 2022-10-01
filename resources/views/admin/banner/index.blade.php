@extends('layouts.app')

@section('title') Banners @stop

@section('content')
    <div class="row mx-3">
        <div class="card">
            <div class="card-header">
                <div class="row align-middle">
                    <div class="col-lg-8 pt-2">
                        <h6>Banner List</h6>
                    </div>
                    <div class="col-lg-4 text-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('banners.create') }}">
                            <i class="fas fa-plus" aria-hidden="true"></i>
                            Add Banner
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-auto" style="height: 100px;" id="banners">
                    <thead>
                        <tr>
                            <th class="align-middle">s/N</th>
                            <th class="align-middle">Banner</th>
                            <th class="align-middle">Details</th>
                            <th class="align-middle">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($banners as $key => $item)
                            <tr>
                                <td class="align-middle">{{ ++$key }}</td>
                                <td class="align-middle">
                                    <img src="{{ $item->media[0]->original_url }}" alt="{{ $item->title }}">
                                </td>
                                <td class="align-middle">middle</td>
                                <td class="align-middle">bottom</td>
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