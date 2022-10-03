@extends('layouts.app')

@section('title') Blogs @stop

@section('content')
    <div class="row mx-3">
        <div class="card col-lg-12">
            <div class="card-header">
                <div class="row align-middle">
                    <div class="col-lg-8 pt-2">
                        <h6>Blog List</h6>
                    </div>
                    <div class="col-lg-4 text-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('blogs.create') }}">
                            <i class="fas fa-plus" aria-hidden="true"></i>
                            Add Blog
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-auto display" style="height: 100px;" id="banners">
                    <thead>
                        <tr>
                            <th class="align-middle">s/N</th>
                            <th class="align-middle">Photo</th>
                            <th class="align-middle">Details</th>
                            <th class="align-middle">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $key => $item)
                            <tr>
                                <td class="align-middle">{{ ++$key }}</td>
                                <td class="align-middle">
                                    @if(count($item->media) > 0)
                                        <img height="100px" src="{{ $item->media[0]->original_url }}" alt="{{ $item->title }}">
                                    @else 
                                        <img height="50px" src="{{ $item->media }}" alt="{{ $item->title }}">
                                    @endif
                                </td>
                                <td class="align-middle">
                                    <div class="row">
                                        <a href="{{ route('blogs.show', $item->slug) }}">
                                            <h5>{{ $item->title }}</h5>
                                        </a>
                                        <em class="text-italic">{{ $item->category->name }}</em>
                                        <p>{{ $item->description }}</p>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="@if($item->active) {{ 'Mark Inactive' }} @else {{ 'Mark active' }} @endif">
                                        <i class="fas fa-check" aria-hidden="true"></i>
                                        <i class="fa-sharp fa-solid fa-rotate"></i>
                                    </a>
                                    <span class="btn-sm btn-primary">@if($item->active) {{ 'Published' }} @else {{ 'Unpublish' }} @endif</span>
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