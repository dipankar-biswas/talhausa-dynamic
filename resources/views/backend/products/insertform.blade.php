<div class="modal fade modal-lg" data-bs-focus="false" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">

                <form method="post" id="myForm">

                    @csrf
   
                    <div class="form-group my-2">
                        <input type="text" name="name" class="form-control" placeholder="Product name *">
                        <span class="form-text" id="errname"></span>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group my-2">
                                <input type="file" name="thumbnail" class="form-control" title="Upload a thumbnail image.">
                                <span class="form-text" id="errthumbnail">Upload a thumbnail image.</span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group my-2">
                                <select class="form-control my-2" name="neck_id">
                                    <option value="">Select Neck</option>
                                    @if(isset($necks) && $necks != null)
                                        @foreach($necks as $neck)
                                            <option value="{{$neck->id}}">{{$neck->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                <span class="form-text" id="errneck_id"></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group my-2">
                        <select class="form-control my-2" name="category_id">
                            <option value="">Select Category</option>

                                @if($categories != null)
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @foreach ($category->childrenCategories as $childCategorys)
                                            
                                            @include('backend.category.childernCategory', ['child_category' => $childCategorys])

                                        @endforeach
                                    @endforeach
                                @endif
                                
                        </select>
                        <span class="form-text" id="errcategory_id"></span>
                    </div>

                    <div class="row default-price">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="form-group my-2">
                                <input type="text" class="form-control price" placeholder="Default Price">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="form-group my-2">
                                <input type="text" class="form-control discount-price" placeholder="Default Old Price">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="form-group my-2">
                                <input type="text" class="form-control stock" placeholder="Default Stock">
                            </div>
                        </div>
                    </div>

                    @if($colors != null)
                        <div class="form-group my-4 d-flex flex-wrap row-gap-2">
                            @foreach($colors as $color)
                                <div class="form-check form-check-inline d-flex align-items-center column-gap-1 p-0">
                                  <input class="form-check-input m-0" name="color[]" type="checkbox" onclick="colorwish({{$color->id}})" id="chbox{{$color->id}}" value="{{$color->id}}" data-type="{{$color->name}}">
                                  <label class="form-check-label" for="chbox{{$color->id}}">{{$color->name}}</label>
                                </div>
                            @endforeach
                            <br><span class="form-text" id="errcolor"></span>
                        </div>
                    @endif



                    @if($colors != null)
                        @foreach($colors as $coloradd)
                            <div class="form-group my-2 colorwish_{{$coloradd->id}}" id="colorwish_{{$coloradd->id}}"></div>
                        @endforeach
                    @endif


                    <div class="form-group my-2">
                        <textarea name="description"></textarea>
                        <script>
                                CKEDITOR.replace( 'description' );
                        </script>
                        <span class="form-text" id="errdescription"></span>
                    </div>

                    <div class="form-group my-2">
                        <input type="text" name="metatitle" class="form-control" placeholder="Meta title">
                        <span class="form-text" id="errmetatitle"></span>
                    </div>

                    <div class="form-group my-2">
                        <input type="text" name="tags" class="form-control" placeholder="Tags">
                        <span class="form-text" id="errtags"></span>
                    </div>

                    <div class="form-group my-2">
                       <textarea class="form-control" rows="6" name="metadescription" placeholder="Meta Description"></textarea>
                       <span class="form-text" id="errmetadescription"></span>
                    </div>

                    <div class="form-group my-2">
                       <select name="status" class="form-control">
                           <option value="1">Active</option>
                           <option value="0">Inactive</option>
                       </select>
                       <span class="form-text" id="errstatus"></span>
                    </div>

                    <div class="d-flex justify-content-end">
                         <button type="submit" class="custom-btn">Save Change</button>
                    </div>
                    

                </form>
              </div>
            </div>
          </div>
        </div>