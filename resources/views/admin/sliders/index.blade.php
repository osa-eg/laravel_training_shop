@extends('layouts.master')
@section('title', 'Dashboard')

@section('content')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">@lang('Dashboard')</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ @lang('Sliders')</span>
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content">
            <a href="{{ route("sliders.create") }}" class="btn btn-primary">@lang('Add New')</a>
        </div>
    </div>
    <!-- breadcrumb -->

    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title mg-b-0">@lang('Sliders')</h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mg-b-0 text-md-nowrap">
                            <thead>
                                <tr>
                                    <th>@lang('id')</th>
                                    <th>@lang('Image')</th>
                                    <th>@lang('Title')</th>
                                    <th>@lang('Sub Title')</th>
                                    <th>@lang('URL')</th>
                                    <th>@lang('Sort')</th>
                                    <th>@lang('Actions')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $item)
                                    <tr>
                                        <td>{{ $item->id }} </td>
                                        <td>
                                            @if ($item->image_url)
                                                <img src="{{$item->image_url}}" width="100" height="60">
                                            @else
                                                @lang('Not Added')
                                            @endif
                                        </td>
                                        <td>{{ $item->title }} </td>
                                        <td>{{ $item->sub_title }} </td>
                                        <td>
                                            <a class="btn btn-link" href="{{ $item->url }}">
                                                {{ $item->button_name }}
                                            </a>
                                        </td>
                                        <td>{{ $item->sort }} </td>
                                        <td>
                                           
                                            <form action="{{ route('sliders.destroy',$item) }}" method="post">
                                                @csrf
                                                @method("DELETE")
                                                 <a class="btn btn-primary btn-sm" href="{{ route('sliders.edit', $item) }}">
                                                    @lang('Edit')
                                                </a>
                                                <button class="btn btn-sm btn-danger" type="submit"> @lang("Delete") </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
