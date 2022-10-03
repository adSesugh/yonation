@extends('layouts.app')

@section('title') Category @stop

@section('content')
    <div class="row">
        <div class="col-lg-7">
            <div class="card">
                <div class="card-header">
                    Category List
                </div>
                <div class="card-body">
                    <table class="table table-auto display" id="categories">
                        <thead>
                            <tr>
                                <th>s/N</th>
                                <th>Name</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $key => $item)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td class="text-right">
                                        <a href="{{ route('categories.edit', $item->id) }}" class="btn btn-sm btn-warning">
                                            <i class="fas fa-edit" aria-hidden="true"></i>
                                            Modify
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card">
                <div class="card-header">Create Category</div>
                <div class="card-body">
                    @if($flag)
                        {!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
                    @else
                        {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PATCH']) !!}
                    @endif
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Category Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="@if(!$flag) {{ $category->name }} @endif">
                        </div>
                        <div class="mb-3 text-right">
                            <button type="submit" class="btn btn-secondary btn-sm px-4">
                                <i class="fas fa-save" aria-hidden="true"></i>
                                @if($flag) Save @else Save Changes @endif
                            </button>
                        </div>
                    {!! Form::close() !!}
                </div>
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
            $('#categories').DataTable();
        });
    </script>
@endpush