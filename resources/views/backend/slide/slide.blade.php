@extends('backend.layouts.master')

@section('admin.styles')

@endsection

@section('admin.content')

<div class="layout-content">
    <div class="page-content">
        <div class="site-setup">
            <div class="step shadow-sm rounded-3 bg-white px-4 py-4">
                <div class="heading">
                    <h4 class="title">Slide Update</h4>
                </div>
                <form method="POST" action="{{ route('slide.updated') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <div class="thumbnail">
                            <div class="image">
                                <div class="remove-btn ImageRemove">X</div>
                                <img class="imageDefault" src="{{ !empty($slide->slide_image)?asset($slide->slide_image):asset('backend/images/dummy-image.jpg') }}" alt="Thumbnail">
                                <img class="imagePreview" src="" alt="Thumbnail">
                            </div>
                            <button type="button" class="btn btn-border btn-sm imageSelect">Upload/Add image</button>
                            <input type="file" name="slide_image" class="dt-none fileOpen">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea name="slide_content" class="form-control" id="" rows="6" placeholder="content">{{ isset($slide->slide_content) ? $slide->slide_content : '' }}</textarea>
                        <small id="errslide_content" class="form-text mb-2"></small>
                    </div>
                    <button type="submit" class="custom-btn mt-4">Save Change</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


@section('admin.scripts')

@endsection
