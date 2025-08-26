@extends('layouts.master')
@section('title', 'Dashboard')
@push('styles')
    <link href="{{ asset('admin/assets/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/plugins/fancyuploder/fancy_fileupload.css') }}" rel="stylesheet" />
@endpush
@section('content')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">@lang('Sliders')</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ @lang('Edit a Slider') </span>
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content">
            <a href="{{ route('sliders.index') }}" class="btn btn-secondary">@lang('Back') </a>
        </div>
    </div>

    @include('components.admin.alerts')
    <!-- row opened -->
    <form action="{{ route('sliders.update',$item) }}" method="post" class="row row-sm" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <div class="col-md-6 ">
            <div class="card  box-shadow-0 h-100">
                <div class="card-header">
                    <h4 class="card-title mb-1">@lang('Main Details')</h4>
                </div>
                <div class="card-body pt-0">
                    <div class="">
                        <div class="form-group">
                            <label for="title">@lang('Title')</label>
                            <input type="text" name="title" class="form-control" id="title" value="{{ old('title',$item->title) }}" placeholder="@lang('Enter slider title')">
                            @error('title')
                                <small class="text-danger d-block">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="sub_title">@lang('Sub-Title')</label>
                            <input type="text" name="sub_title" class="form-control" id="sub_title" value="{{ old('sub_title',$item->sub_title) }}" placeholder="@lang('Enter slider sub-title')">
                            @error('sub_title')
                                <small class="text-danger d-block">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="button_name">@lang('Button Name')</label>
                            <input type="text" name="button_name" class="form-control" id="button_name" value="{{ old('button_name', $item->button_name) }}" placeholder="@lang('Enter slider button name')">
                            @error('button_name')
                                <small class="text-danger d-block">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="url">@lang('URL')</label>
                            <input type="url" name="url" class="form-control" id="url" value="{{ old('url', $item->url) }}" placeholder="@lang('Enter slider URL')">
                            @error('url')
                                <small class="text-danger d-block">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card  box-shadow-0  h-100">
                <div class="card-header">
                    <h4 class="card-title mb-1">@lang('Other Details')</h4>
                </div>
                <div class="card-body pt-0">
                    <div class="form-group">
                        <label for="sort">@lang('Sort')</label>
                        <input type="number" name="sort" class="form-control" id="sort" value="{{ old('sort', $item->sort) }}" placeholder="@lang('Enter slider sort')">
                        @error('sort')
                            <small class="text-danger d-block">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="sort">@lang('Image')</label>
                        <input type="file" name="image" class="dropify" data-default-file="{{ $item->image_url }}" data-height="220" />
                        <small class="text-secondary"> @lang("It's supposed to upload an image with width= :width px and height= :height px", [
                            'width' => 1920,
                            'height' => 718,
                        ]) </small>
                        @error('image')
                            <small class="text-danger d-block">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary mt-3 mb-0">@lang('Save')</button>
        </div>
    </form>
@endsection
@push('scripts')
    <script src="{{ asset('admin/assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script>
        $('.dropify').dropify({
            messages: {
                'default': "@lang('Drag and drop a file here or click')",
                'replace': "@lang('Drag and drop or click to replace')",
                'remove': "@lang('Remove')",
                'error': "@lang('Ooops, something wrong appended.')"
            },
            error: {
                'fileSize': "@lang('The file size is too big (2M max).')"
            }
        });
    </script>
@endpush
