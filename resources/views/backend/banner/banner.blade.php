@extends('backend.layouts.master')

@section('admin.styles')

@endsection

@section('admin.content')

<div class="layout-content">
    <div class="page-content">
        <div class="site-setup">
            <div class="step shadow-sm rounded-3 bg-white px-4 py-4 mb-4">
                <div class="heading">
                    <h4 class="title">Banner Top</h4>
                </div>
                <form method="POST" action="{{ route('banner.update.top') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <div class="thumbnail">
                            <div class="image">
                                <div class="remove-btn ImageRemove">X</div>
                                <img class="imageDefault" src="{{ isset($banner->banner_image_one)?asset($banner->banner_image_one):asset('backend/images/dummy-image.jpg') }}" alt="Thumbnail">
                                <img class="imagePreview" src="" alt="Thumbnail">
                            </div>
                            <button type="button" class="btn btn-border btn-sm imageSelect">Upload/Add image</button>
                            <input type="file" name="banner_image_one" class="dt-none fileOpen">
                        </div>
                    </div>
                    <button type="submit" class="custom-btn mt-4">Save Change</button>
                </form>
            </div>
            <div class="step shadow-sm rounded-3 bg-white px-4 py-4 mb-4">
                <div class="heading">
                    <h4 class="title">Banner Middle</h4>
                </div>
                <form method="POST" action="{{ route('banner.update.middle') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <div class="thumbnail">
                            <div class="image">
                                <div class="remove-btn ImageRemove">X</div>
                                <img class="imageDefault" src="{{ isset($banner->banner_image_two)?asset($banner->banner_image_two):asset('backend/images/dummy-image.jpg') }}" alt="Thumbnail">
                                <img class="imagePreview" src="" alt="Thumbnail">
                            </div>
                            <button type="button" class="btn btn-border btn-sm imageSelect">Upload/Add image</button>
                            <input type="file" name="banner_image_two" class="dt-none fileOpen">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="thumbnail">
                            <div class="image">
                                <div class="remove-btn ImageRemove">X</div>
                                <img class="imageDefault" src="{{ isset($banner->banner_image_three)?asset($banner->banner_image_three):asset('backend/images/dummy-image.jpg') }}" alt="Thumbnail">
                                <img class="imagePreview" src="" alt="Thumbnail">
                            </div>
                            <button type="button" class="btn btn-border btn-sm imageSelect">Upload/Add image</button>
                            <input type="file" name="banner_image_three" class="dt-none fileOpen">
                        </div>
                    </div>
                    <button type="submit" class="custom-btn mt-4">Save Change</button>
                </form>
            </div>
            <div class="step shadow-sm rounded-3 bg-white px-4 py-4">
                <div class="heading">
                    <h4 class="title">Banner Bottom</h4>
                </div>
                <form method="POST" action="{{ route('banner.update.bottom') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <div class="thumbnail">
                            <div class="image">
                                <div class="remove-btn ImageRemove">X</div>
                                <img class="imageDefault" src="{{ isset($banner->banner_image_four)?asset($banner->banner_image_four):asset('backend/images/dummy-image.jpg') }}" alt="Thumbnail">
                                <img class="imagePreview" src="" alt="Thumbnail">
                            </div>
                            <button type="button" class="btn btn-border btn-sm imageSelect">Upload/Add image</button>
                            <input type="file" name="banner_image_four" class="dt-none fileOpen">
                        </div>
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
