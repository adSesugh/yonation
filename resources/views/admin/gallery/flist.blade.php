@extends('layouts.app')

@section('title') Galleries @stop

@section('content')
    {!! Form::open(['route' => ['galleries.store'], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        @csrf
        <div class="row" >
            <div class="col-lg-6">
                <div class="card position-relative">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Gallery</h6>
                    </div>
                    <div class="card-body" >
                        <input required type="file" id="gallery-photo-add" multiple name="photos[]" maxlength="16" accept="image/*" />
                        <div id="gallery" class="gallery"></div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="card position-relative">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Other Details</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="title" class="form-label">Name</label>
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Gallery Name' ]) !!}
                        </div>
                        <div class="mb-3">
                            <label for="subtitle" class="form-label">Category</label>
                            {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-12 text-right">
                <div class="mb-3">
                    <button class="btn btn-sm btn-primary" type="submit">
                        <i class="fas fa-save" aria-hidden="true"></i>
                        Save Banner
                    </button>
                </div>
            </div>
        </div>
    {!! Form::close() !!}
    <div class="card">
        <div class="card-header">
            Gallery List
        </div>
        <div class="card-body">
            <div class="row no-gutters">
                @foreach ($galleries as $item)
                    @foreach ($item->media as $photo)
                        <div class="col-lg-2"> 
                            <img src="{{ $photo->original_url }}" height="100px" width="100%" alt="{{ $item->name }}">
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
@endsection

@push('css')
@endpush

@push('js')
    <script>
        var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
        };
        $(function() {
            // Multiple images preview in browser
            var imagesPreview = function(input, placeToInsertImagePreview) {

                if (input.files) {
                    var filesAmount = input.files.length;
                    
                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();

                        reader.onload = function(event) {
                            $($.parseHTML('<img height="100px" width="100px">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                        }

                        reader.readAsDataURL(input.files[i]);
                    }
                }

            };

            $('#gallery-photo-add').on('change', function() {
                var $fileUpload = $("input[type='file']");
                if (parseInt($fileUpload.get(0).files.length) > 16){
                    alert("You are only allowed to upload a maximum of 16 files");
                    return
                }
                else {
                    imagesPreview(this, 'div.gallery');
                }
            });
        });
    </script>
@endpush