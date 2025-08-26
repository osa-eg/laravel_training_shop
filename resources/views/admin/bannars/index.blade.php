@extends('layouts.master')
@section('title', 'Dashboard')

@section('content')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">@lang('Dashboard')</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ @lang('Bannars')</span>
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content">
            <a href="{{ route('bannars.create') }}" class="btn btn-primary">@lang('Add New')</a>
        </div>
    </div>
    <!-- breadcrumb -->

    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title mg-b-0">@lang('Bannars')</h3>
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
                                    <th>@lang('Actions')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($list as $item)
                                    <tr>
                                        <td>{{ $item->id }} </td>
                                        <td>
                                            @if ($item->image_url)
                                                <img src="{{ $item->image_url }}" width="100" height="60">
                                            @else
                                                @lang('Not Added')
                                            @endif
                                        </td>
                                        <td>{{ $item->title }} </td>
                                        <td>{{ $item->sub_title }} </td>
                                        <td>
                                            <a class="btn btn-link" href="{{ $item->url }}">
                                                @lang('View')
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{ route('categories.destroy', $item) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a class="btn btn-primary btn-sm" href="{{ route('categories.edit', $item) }}">
                                                    @lang('Edit')
                                                </a>
                                                <button class="btn btn-sm btn-danger" type="submit"> @lang('Delete') </button>
                                            </form>
                                        </td>
                                        {{-- <td>


                                            <a class="btn btn-primary btn-sm" href="{{ route('bannars.edit', $item) }}">
                                                @lang('Edit')
                                            </a> --}}
                                        <!-- Button trigger modal -->
                                        {{-- <button type="button" class="btn btn-sm btn-danger " data-bs-toggle="modal" data-bs-target="#delete-{{ $item->id }}">
                                                @lang('Delete')
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="delete-{{ $item->id }}" tabindex="-1" aria-labelledby="delete-{{ $item->id }}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <form action="{{ route('bannars.destroy', $item) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">@lang('Delete Confirmation')</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                @lang('Are you sure you want to delete this item?')
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('Cancel')</button>
                                                                <button type="button" class="btn btn-primary">@lang('Delete')</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div> --}}

                                        {{-- </td> --}}
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center"> @lang('No Available Data') </td>
                                    </tr>
                                @endforelse


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
