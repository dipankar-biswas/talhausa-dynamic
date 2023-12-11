<div class="modal fade modal-lg" data-bs-focus="false" id="staticBackdropUpdate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Update product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">

                <form method="post" id="myFormUpdate">
                    @csrf

                    <input type="text" name="id" id="id">
   
                    <div class="form-group my-4">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Product name *">
                        <span class="form-text" id="erruname"></span>
                    </div>

                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group my-4">
                                <input type="file" name="thumbnail" class="form-control" title="Upload a thumbnail image.">
                                <span class="form-text" id="erruthumbnail">Upload a thumbnail image.</span>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group my-4">
                                <select class="form-control my-2" name="neck_id" id="neck_id">
                                    <option value="">Select Neck</option>
                                    @if(isset($necks) && $necks != null)
                                        @foreach($necks as $neck)
                                            <option value="{{$neck->id}}">{{$neck->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                <span class="form-text" id="erruneck_id"></span>
                            </div>
                        </div>

                    </div>

                    <div class="form-group my-4">
                        <select class="form-control my-2" name="category_id" id="category_id">
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
                        <span class="form-text" id="errucategory_id"></span>
                    </div>

                    @if($colors != null)
                        <div class="form-group my-4 d-flex flex-wrap row-gap-2">
                            @foreach($colors as $color)
                                <div class="form-check form-check-inline d-flex align-items-center column-gap-1 p-0">

                                  <input class="form-check-input get_static_color m-0" name="color[]" type="checkbox" onclick="colorwish_update({{$color->id}})" id="chubox{{$color->id}}" value="{{$color->id}}" data-type="{{$color->name}}">


                                  <label class="form-check-label" for="chubox{{$color->id}}">{{$color->name}}</label>
                                </div>
                            @endforeach
                            <br><span class="form-text" id="errucolor"></span>
                        </div>
                    @endif

                    @if($colors != null)
                        @foreach($colors as $coloradd)
                            <div class="form-group my-2 emptyClass colorwishup_{{$coloradd->id}}" id="colorwishup_{{$coloradd->id}}">
                            </div>
                        @endforeach
                    @endif

                    <div class="form-group my-4">
                        <textarea name="descriptionUpdate" id="descriptionUpdate"></textarea>
                        <script>
                                CKEDITOR.replace( 'descriptionUpdate' );
                        </script>
                        <span class="form-text" id="errudescriptionUpdate"></span>
                    </div>

                    <div class="form-group my-4">
                        <input type="text" name="metatitle" id="metatitle" class="form-control" placeholder="Meta title">
                        <span class="form-text" id="errumetatitle"></span>
                    </div>

                    <div class="form-group my-4">
                        <input type="text" name="tags" id="tags" class="form-control" placeholder="Tags">
                        <span class="form-text" id="errtags"></span>
                    </div>

                    <div class="form-group my-4">
                       <textarea class="form-control" rows="6" name="metadescription" id="metadescription" placeholder="Meta Description"></textarea>
                       <span class="form-text" id="errumetadescription"></span>
                    </div>

                    <div class="form-group my-4">
                       <select name="status" id="status" class="form-control">
                           <option value="1">Active</option>
                           <option value="0">Inactive</option>
                       </select>
                       <span class="form-text" id="errustatus"></span>
                    </div>
                    


                    

                    <div class="d-flex justify-content-end">
                         <button type="submit" class="custom-btn">Update Change</button>
                    </div>

                </form>




              </div>
            </div>
          </div>
        </div>