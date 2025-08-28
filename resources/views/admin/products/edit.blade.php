@extends('layouts.master')
@section('title', 'Dashboard')
@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">
    <link href="{{ asset('admin/assets/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/plugins/fancyuploder/fancy_fileupload.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">@lang('Products')</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ @lang('Edit Product')</span>
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content">
            <a href="{{ route('products.index') }}" class="btn btn-secondary">@lang('Back')</a>
        </div>
    </div>

    <!-- row opened -->
    <form action="{{ route('products.update', $item) }}" method="post" class="row row-sm" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="col-md-6">
            <div class="card box-shadow-0 h-100">
                <div class="card-header">
                    <h4 class="card-title mb-1">@lang('Main Details')</h4>
                </div>
                <div class="card-body pt-0">
                    <div class="">
                        <div class="form-group">
                            <label for="name">@lang('Name')</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{ old('name', $item->name) }}" placeholder="@lang('Enter product name')">
                            @error('name')
                                <small class="text-danger d-block">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="details">@lang('Details')</label>
                            <textarea name="details" id="details">{{ old('details', $item->details) }}</textarea>
                            @error('details')
                                <small class="text-danger d-block">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="specification">@lang('Specification')</label>
                            <textarea name="specification" id="specification">{{ old('specification', $item->specification) }}</textarea>
                            @error('specification')
                                <small class="text-danger d-block">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card box-shadow-0 h-100">
                <div class="card-header">
                    <h4 class="card-title mb-1">@lang('Other Details')</h4>
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="category_id">@lang('Category')</label>
                                <select name="category_id" class="form-control">
                                    <option value="">@lang('Select an Item')</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ (string) old('category_id', $item->category_id) === (string) $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <small class="text-danger d-block">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="price_before_discount">@lang('Price Before Discount')</label>
                                <input type="number" min="0" step=".5" name="price_before_discount" class="form-control" id="price_before_discount" value="{{ old('price_before_discount', $item->price_before_discount) }}" placeholder="@lang('Enter product price before discount')">
                                @error('price_before_discount')
                                    <small class="text-danger d-block">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="price_after_discount">@lang('Price After Discount')</label>
                                <input type="number" min="0" step=".5" name="price_after_discount" class="form-control" id="price_after_discount" value="{{ old('price_after_discount', $item->price_after_discount) }}" placeholder="@lang('Enter product price after discount')">
                                @error('price_after_discount')
                                    <small class="text-danger d-block">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="image">@lang('Image')</label>
                        <input type="file" name="image" id="image" class="dropify" data-default-file="{{ $item->image_url ?? (isset($item->image_path) ? asset('storage/' . $item->image_path) : '') }}" data-height="220" />
                        <small class="text-secondary d-block">
                            @lang("It's supposed to upload an image with width= :width px and height= :height px", [
                                'width' => 1920,
                                'height' => 718,
                            ])
                        </small>
                        <small class="text-muted d-block">
                            @lang('Leave empty to keep the current image.')
                        </small>
                        @error('image')
                            <small class="text-danger d-block">{{ $message }}</small>
                        @enderror
                    </div>

                </div>
            </div>
        </div>

        <div class="col-xl-12 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary mt-3 mb-0">@lang('Update')</button>
        </div>
    </form>
@endsection

@push('scripts')
    <script src="{{ asset('admin/assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>

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

        $('#details').summernote({
            height: 150,
        });

        $('#specification').summernote({
            height: 150,
        });
    </script>
@endpush
