@extends('admin.layout.master')
@section('title')
Gallery
@endsection


@push('css')
<style>
    .btn-file {
        position: relative;
        cursor: pointer;
    }
    .btn-file input {
        cursor: pointer;
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
    }

    .cardImage {
        position: relative;
        float: left;
        height: 150px;
        margin: 10px;
        border-radius: 10px;
    }
    .cardImage img{
        height: 100%;
        width: 100%;
    }
    .cardImage button{
        position: absolute;
        border: 0;
        background: none;
        top: -15px;
        right: -2px;
    }
</style>
@endpush

@section('content')

<div class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header margin">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Gallery Images</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area margin">
        {{ Form::open(['route' => ['admin.galleries.store'], 'method' => 'POST', 'files' => true]) }}
            <div class="row">
                <div class="form-group col-6">
                    <button class="btn btn-primary btn-file mb-3">
                        Add Gallery Image
                        <input type="file" id="videoFile" name="image">
                    </button>
                    <br>
                </div>
                <div class="col-6">
                    <input type="submit" value="Save" class="mt-4 mb-4 btn btn-primary">
                </div>
            </div>
        {{ Form::close() }}
        @foreach($gallery as $image)
        <div class="cardImage col-3">
            <img src="{{ getImagePath($image->image) }}" alt="">
            <button style="border: 0;background: none" type="button" data-placement="top" title=""
                data-original-title="Delet" data-toggle="modal" data-target="#deleteModal{{$image->id}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-trash-2 text-danger">
                    <polyline points="3 6 5 6 21 6"></polyline>
                    <path
                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                    <line x1="10" y1="11" x2="10" y2="17"></line>
                    <line x1="14" y1="11" x2="14" y2="17"></line>
                </svg>
            </button>
        </div>
        <x-admin.delete-modal :route="$delete_route" :id="$image->id" />
        @endforeach
        </div>
    </div>

    <hr>

    <div class="statbox widget box box-shadow">
        <div class="widget-header margin">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Background Images</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area margin">
        {{ Form::open(['route' => ['admin.background.store'], 'method' => 'POST', 'files' => true]) }}
            <div class="row">
                <div class="form-group col-6">
                    <button class="btn btn-primary btn-file mb-3">
                        Add Background Image
                        <input type="file" id="videoFile" name="image">
                    </button>
                    <br>
                </div>
                <div class="col-6">
                    <input type="submit" value="Save" class="mt-4 mb-4 btn btn-primary">
                </div>
            </div>
        {{ Form::close() }}
        @foreach($bgImages as $image)
        <div class="cardImage col-3">
            <img src="{{ getImagePath($image->image) }}" alt="">
            <button style="border: 0;background: none" type="button" data-placement="top" title=""
                data-original-title="Delet" data-toggle="modal" data-target="#deleteModal{{$image->id}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-trash-2 text-danger">
                    <polyline points="3 6 5 6 21 6"></polyline>
                    <path
                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                    <line x1="10" y1="11" x2="10" y2="17"></line>
                    <line x1="14" y1="11" x2="14" y2="17"></line>
                </svg>
            </button>
        </div>
        <x-admin.delete-modal :route="$delete_route" :id="$image->id" />
        @endforeach
        </div>
    </div>

</div>



@endsection


@push('scripts')
	@include('admin.layout.text-editor')
@endpush