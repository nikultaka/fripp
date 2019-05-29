<form class="form-horizontal" id="frm_banner" name="frm_banner" method="post" onsubmit="return false;">
    <div class="modal fade" id="add_banner_model" role="dialog">
        <div class="modal-dialog">
            <!--modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Add Banner</h4>
                </div>
                <div class="modal-body">
                    
                        <p id="msg"></p>
                         {{ csrf_field() }}
                        <div class="card-body">
                            <input type="hidden" name="id" id="id" value="">
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="title" class="col-sm-2"> Title</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="" name="title" id="title" data-validation="required" />
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="slug" class="col-sm-2"> Page</label>
                                <div class="col-sm-8">
                                    <select class="form-control" id="page_name" name="page_name" data-validation="required">
                                        <option value="">select page</option>
                                        <option value="home">Home</option>
                                        <option value="about-us">About Us</option>
                                        <option value="links">Links</option>
                                        <option value="contact">Contact</option>
                                        <option value="gallery">Gallery</option>
                                        <option value="services">Services</option>
                                        <option value="gallery/couples">Services/Couples</option>
                                        <option value="gallery/families">Services/Families</option>
                                        <option value="gallery/graduating-seniors">Services/Graduating Seniors</option>
                                        <option value="gallery/reunions">Services/Reunions</option>
                                        <option value="gallery/little-ones">Services/Little Ones</option>
                                        
                                        <option value="-1">Other</option>
                                    </select>
                                    <input type="text" class="form-control" value="" name="add_page_name" id="add_page_name" style="display: none" />
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="exampleInputFile" class="col-sm-2"> Image</label>
                                <div class="col-sm-4">
                                    <input type="file" id="banner_image" name="banner_image">
                                </div>
                                <div class="col-sm-4">
                                    <?php 
                                    if(isset($banner->banner) && $banner->banner != '' ){ 
                                      $url =   ASSET.'upload/image/banner/resize/'.$banner->banner;
                                    }else{
                                        $url =   ASSET.'upload/logo.png';
                                    } 
                                    ?>
                                    <img id="banner_image_priview" style="width: 150px; height: 50px;" src="{{url($url)}}">
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="status" class="col-sm-2">Status</label>
                                <div class="col-sm-8">
                                    <select id="status" class="form-control" name="status" data-validation="required">
                                        <option value="">----Select Status----</option>
                                        <option value="1" <?php if(isset($banner->status)){ if($banner->status == '1'){echo 'selected';}} ?>>Active</option>
                                        <option value="0" <?php if(isset($banner->status)){ if($banner->status == '0'){echo 'selected';}} ?>>Inactive</option>
                                    </select>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>

                        
                    </div>
                </div>
                <div class="modal-footer" >
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>