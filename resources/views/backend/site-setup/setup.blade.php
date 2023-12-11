@extends('backend.layouts.master')

@section('admin.styles')

@endsection

@section('admin.content')

<div class="layout-content">
    <div class="page-content">
        <div class="site-setup">
            <div class="step shadow-sm rounded-3 bg-white px-4 py-4 mb-4">
                <div class="heading">
                    <h4 class="title">Header Logo</h4>
                </div>
                <form method="POST" action="{{ route('site.setup.logo') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="thumbnail">
                            <div class="image">
                                <div class="remove-btn ImageRemove">X</div>
                                <img class="imageDefault" src="{{ isset($setup->header_logo)?asset($setup->header_logo):asset('backend/images/dummy-image.jpg') }}" alt="Thumbnail">
                                <img class="imagePreview" src="" alt="Thumbnail">
                            </div>
                            <button type="button" class="btn btn-border btn-sm imageSelect">Upload/Add image</button>
                            <input type="file" name="header_logo" class="dt-none fileOpen">
                        </div>
                    </div>
                    <button type="submit" class="custom-btn mt-4">Save Change</button>
                </form>
            </div>
            <div class="step shadow-sm rounded-3 bg-white px-4 py-4 mb-4">
                <div class="heading">
                    <h4 class="title">Information</h4>
                </div>
                <form method="POST" action="{{ route('site.setup.info') }}">
                    @csrf
                    <div class="form-group mb-3">
                        <label>Hot-Line</label>
                        <input type="text" name="hot_line" class="form-control" value="{{ isset($setup->hot_line) ? $setup->hot_line : '' }}"
                            placeholder="hot-line">
                        <small id="errphone" class="form-text mb-2"></small>
                    </div>
                    <div class="form-group mb-3">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control" value="{{ isset($setup->phone) ? $setup->phone : '' }}"
                            placeholder="phone number">
                        <small id="errphone" class="form-text mb-2"></small>
                    </div>
                    <div class="form-group mb-3">
                        <label>Phone Two</label>
                        <input type="text" name="phone_two" class="form-control" value="{{ isset($setup->phone_two) ? $setup->phone_two : '' }}"
                            placeholder="phone number">
                        <small id="errphone" class="form-text mb-2"></small>
                    </div>
                    <div class="form-group mb-3">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" value="{{ isset($setup->email) ? $setup->email : ''}}"
                            placeholder="email address">
                        <small id="erremail" class="form-text mb-2"></small>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea name="address" class="form-control" id="" rows="6" placeholder="address">{{ isset($setup->address) ? $setup->address : ''}}</textarea>
                        <small id="erraddress" class="form-text mb-2"></small>
                    </div>
                    <div class="form-group">
                        <label>Maps</label>
                        <textarea name="maps" class="form-control" id="" rows="2" placeholder="Google Maps">{{ isset($setup->maps) ? $setup->maps : ''}}</textarea>
                        <small id="errmaps" class="form-text mb-2"></small>
                    </div>
                    <button type="submit" class="custom-btn mt-4">Save Change</button>
                </form>
            </div>
            <div class="step shadow-sm rounded-3 bg-white px-4 py-4 mb-4">
                <div class="heading">
                    <h4 class="title">Social Media</h4>
                </div>
                <form method="POST" action="{{ route('site.setup.social') }}">
                    @csrf
                    <div class="form-group row mb-3">
                        <label for="facebook" class="col-sm-2 col-form-label">Facebook</label>
                        <div class="col-sm-10">
                        <input type="text" name="facebook" class="form-control" id="facebook" value="{{ isset($setup->facebook) ? $setup->facebook : '' }}" placeholder="https://facebook.com">
                        <small id="errfacebook" class="form-text mb-2"></small>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="instagram" class="col-sm-2 col-form-label">Instagram</label>
                        <div class="col-sm-10">
                        <input type="text" name="instagram" class="form-control" id="instagram" value="{{ isset($setup->instagram) ? $setup->instagram : '' }}" placeholder="https://instagram.com">
                        <small id="errinstagram" class="form-text mb-2"></small>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="twitter" class="col-sm-2 col-form-label">Twitter</label>
                        <div class="col-sm-10">
                        <input type="text" name="twitter" class="form-control" id="twitter" value="{{ isset($setup->twitter) ? $setup->twitter : '' }}" placeholder="https://twitter.com">
                        <small id="errtwitter" class="form-text mb-2"></small>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="linkedin" class="col-sm-2 col-form-label">Linkedin</label>
                        <div class="col-sm-10">
                        <input type="text" name="linkedin" class="form-control" id="linkedin" value="{{ isset($setup->linkedin) ? $setup->linkedin : '' }}" placeholder="https://linkedin.com">
                        <small id="errlinkedin" class="form-text mb-2"></small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="youtube" class="col-sm-2 col-form-label">Youtube</label>
                        <div class="col-sm-10">
                        <input type="text" name="youtube" class="form-control" id="youtube" value="{{ isset($setup->youtube) ? $setup->youtube : '' }}" placeholder="https://youtube.com">
                        <small id="erryoutube" class="form-text mb-2"></small>
                        </div>
                    </div>
                    <button type="submit" class="custom-btn mt-4">Save Change</button>
                </form>
            </div>
            <div class="step shadow-sm rounded-3 bg-white px-4 py-4 mb-4">
                <div class="heading">
                    <h4 class="title">Footer Logo</h4>
                </div>
                <form method="POST" action="{{ route('site.setup.footer') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <div class="thumbnail">
                            <div class="image">
                                <div class="remove-btn ImageRemove">X</div>
                                <img class="imageDefault" src="{{ isset($setup->footer_logo)?asset($setup->footer_logo):asset('backend/images/dummy-image.jpg') }}" alt="Thumbnail">
                                <img class="imagePreview" src="" alt="Thumbnail">
                            </div>
                            <button type="button" class="btn btn-border btn-sm imageSelect">Upload/Add image</button>
                            <input type="file" name="footer_logo" class="dt-none fileOpen">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea name="footer_content" class="form-control" id="" rows="6" placeholder="content">{{ isset($setup->footer_content) ? $setup->footer_content : '' }}</textarea>
                        <small id="errfooter_content" class="form-text mb-2"></small>
                    </div>
                    <button type="submit" class="custom-btn mt-4">Save Change</button>
                </form>
            </div>
            <div class="step shadow-sm rounded-3 bg-white px-4 py-4">
                <div class="heading">
                    <h4 class="title">Copyright</h4>
                </div>
                <form method="POST" action="{{ route('site.setup.copyright') }}">
                    @csrf
                    <div class="form-group">
                        <label>Copyright Text</label>
                        <input type="text" name="copyright_text" class="form-control" value="{{ isset($setup->copyright_text) ? $setup->copyright_text : '' }}" placeholder="Copyright by @">
                        <small id="errcopyright_text" class="form-text mb-2"></small>
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
