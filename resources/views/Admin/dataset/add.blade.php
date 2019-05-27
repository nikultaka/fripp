@extends('Admin.layouts.dashboard.main')

@section('pageTitle','Dataset')
@section('pageHeadTitle','Dataset')

@section('content')

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Dataset</h3>

      <div class="box-tools pull-right">
         <a href="{{url(ADMIN.'/dataset/list')}}" class="btn btn-info btn-sm">Dataset List</a> 
      </div>
      <p id="msg_main"></p>
    </div>
    <div class="box-body">
        <form class="form-horizontal" role="form" method="post" id="frm_dataset" name="frm_dataset" enctype="multipart/form-data" onsubmit="return false"> 
                        {{ csrf_field() }}
                        <div class="card-body">
                            <input type="hidden" name="id" id="id" value="<?php echo isset($dataset->fld_dataset_id) ? $dataset->fld_dataset_id : '' ?>">
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="title" class="col-sm-2">Brand</label>
                                <div class="col-sm-8">
                                    <select id="category_id" name="category_id" class="form-control" data-validation="required">
                                        <option value="">----Select Category----</option>
                                    <?php 
                                        if(!empty($brand)){
                                            foreach ($brand as $key => $value) { ?>
                                                <option value="<?php echo $value->id;?>" <?php if(isset($dataset->fld_category_id)){ if($dataset->fld_category_id == $value->id){echo 'selected';}} ?>><?php echo $value->title;?></option>
                                    <?php   } 
                                        }
                                    ?>
                                    </select>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="title" class="col-sm-2">Title</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="<?php echo isset($dataset->fld_dataset_title) ? $dataset->fld_dataset_title : '' ?>" name="title" id="title" data-validation="required" />
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="short_desc" class="col-sm-2">Short Description</label>
                                <div class="col-sm-8">
                                    <textarea id="short_desc" class="form-control" name="short_desc" rows="5" cols="80" data-validation="required"><?php echo isset($dataset->fld_shortdescription) ? $dataset->fld_shortdescription : '' ?></textarea>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="description" class="col-sm-2">Description Editor</label>
                                <div class="col-sm-8">
                                    <textarea id="description" class="form-control" class="editor" name="description" rows="10" cols="80"><?php echo isset($dataset->fld_dataset_desc) ? $dataset->fld_dataset_desc : '' ?></textarea>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="publisher" class="col-sm-2">Publisher</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="publisher" id="publisher" value="<?php echo isset($dataset->fld_dataset_publisher) ? $dataset->fld_dataset_publisher : '' ?>" data-validation="required"/>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="unique_identifier" class="col-sm-2">Unique Identifier</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="unique_identifier" id="unique_identifier" value="<?php echo isset($dataset->fld_dataset_unique_identifier) ? $dataset->fld_dataset_unique_identifier : '' ?>" data-validation="required"/>
                                </div>
                                <div class="col-sm-1"></div>
                            </div> 
                            
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="maintainer" class="col-sm-2">Maintainer</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="maintainer" id="maintainer" value="<?php echo isset($dataset->fld_dataset_maintainer) ? $dataset->fld_dataset_maintainer : '' ?>" data-validation="required"/>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="maintainer_email" class="col-sm-2">Maintainer Email</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="maintainer_email" id="maintainer_email" value="<?php echo isset($dataset->fld_dataset_maintainer_email) ? $dataset->fld_dataset_maintainer_email : '' ?>" data-validation="email"/>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="public_access" class="col-sm-2">Public access</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="public_access" id="public_access" value="<?php echo isset($dataset->fld_dataset_public_access) ? $dataset->fld_dataset_public_access : '' ?>" data-validation="required"/>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="data_fupdate" class="col-sm-2">Data Fupdate</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="data_fupdate" id="data_fupdate" value="<?php echo isset($dataset->fld_dataset_data_fupdate) ? $dataset->fld_dataset_data_fupdate : '' ?>" data-validation="required"/>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="bureau_code" class="col-sm-2">Bureau Code</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="bureau_code" id="bureau_code" value="<?php echo isset($dataset->fld_dataset_bureau_code) ? $dataset->fld_dataset_bureau_code : '' ?>" data-validation="required"/>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="metadata_context" class="col-sm-2">Metadata Context</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="metadata_context" id="metadata_context" value="<?php echo isset($dataset->fld_dataset_metadata_context) ? $dataset->fld_dataset_metadata_context : '' ?>" data-validation="required"/>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="schema_version" class="col-sm-2">Schema Version</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="schema_version" id="schema_version" value="<?php echo isset($dataset->fld_dataset_schema_version) ? $dataset->fld_dataset_schema_version : '' ?>" data-validation="required"/>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="catalog_describedby" class="col-sm-2">Catalog Describedby</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="catalog_describedby" id="catalog_describedby" value="<?php echo isset($dataset->fld_dataset_catalog_describedby) ? $dataset->fld_dataset_catalog_describedby : '' ?>" data-validation="required"/>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="data_quality" class="col-sm-2">Data Quality</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="data_quality" id="data_quality" value="<?php echo isset($dataset->fld_dataset_data_quality) ? $dataset->fld_dataset_data_quality : '' ?>" data-validation="required"/>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="data_dictionary" class="col-sm-2">Data Dictionary</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="data_dictionary" id="data_dictionary" value="<?php echo isset($dataset->fld_dataset_data_dictionary) ? $dataset->fld_dataset_data_dictionary : '' ?>" data-validation="required"/>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="harvest_object_id" class="col-sm-2">Harvest Object Id</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="harvest_object_id" id="harvest_object_id" value="<?php echo isset($dataset->fld_dataset_harvest_object_id) ? $dataset->fld_dataset_harvest_object_id : '' ?>" data-validation="required"/>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="harvest_sId" class="col-sm-2">Harvest Sid</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="harvest_sId" id="harvest_sId" value="<?php echo isset($dataset->fld_dataset_harvest_sId) ? $dataset->fld_dataset_harvest_sId : '' ?>" data-validation="required"/>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="harvest_stitle" class="col-sm-2">Harvest Stitle</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="harvest_stitle" id="harvest_stitle" value="<?php echo isset($dataset->fld_dataset_harvest_stitle) ? $dataset->fld_dataset_harvest_stitle : '' ?>" data-validation="required"/>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="license" class="col-sm-2">License</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="license" id="license" value="<?php echo isset($dataset->fld_dataset_license) ? $dataset->fld_dataset_license : '' ?>" data-validation="required"/>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="metadata_type" class="col-sm-2">Metadata Type</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="metadata_type" id="metadata_type" value="<?php echo isset($dataset->fld_dataset_metadata_type) ? $dataset->fld_dataset_metadata_type : '' ?>" data-validation="required"/>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="program_code" class="col-sm-2">Program Code</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="program_code" id="program_code" value="<?php echo isset($dataset->fld_dataset_program_code) ? $dataset->fld_dataset_program_code : '' ?>" data-validation="required"/>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="related_documents" class="col-sm-2">Related Documents</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="related_documents" id="related_documents" value="<?php echo isset($dataset->fld_dataset_related_documents) ? $dataset->fld_dataset_related_documents : '' ?>" data-validation="required"/>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="source_datajson" class="col-sm-2">Source Datajson</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="source_datajson" id="source_datajson" value="<?php echo isset($dataset->fld_dataset_source_datajson) ? $dataset->fld_dataset_source_datajson : '' ?>" data-validation="required"/>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="source_hash" class="col-sm-2">Source Hash</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="source_hash" id="source_hash" value="<?php echo isset($dataset->fld_dataset_source_hash) ? $dataset->fld_dataset_source_hash : '' ?>" data-validation="required"/>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="source_schema" class="col-sm-2">Source Schema</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="source_schema" id="source_schema" value="<?php echo isset($dataset->fld_dataset_source_schema) ? $dataset->fld_dataset_source_schema : '' ?>" data-validation="required"/>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="spatial" class="col-sm-2">Spatial</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="spatial" id="spatial" value="<?php echo isset($dataset->fld_dataset_spatial) ? $dataset->fld_dataset_spatial : '' ?>" data-validation="required"/>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="dataset_image" class="col-sm-2">Image</label>
                                <div class="col-sm-4">
                                    <input type="file" class="form-control" name="dataset_image" id="dataset_image" accept="image/*"
                                        data-validation="mime size" 
                                        data-validation-allowing="jpeg,png,jpg,gif,svg" 
                                        data-validation-max-size="2M"
                                        data-validation-error-msg-mime="You can only upload images" >
                                </div>
                                <div class="col-sm-4">
                                    <?php 
                                    if(isset($dataset->fld_dataset_image) && $dataset->fld_dataset_image != '' ){ 
                                      $url =   ASSET.'upload/dataset/image/thumbnail/'.$dataset->fld_dataset_image;
                                    }else{
                                        $url =   ASSET.'upload/No-Image-Basic.png';
                                    } 
                                    ?>
                                    <img id="dataset_priview" style="width: 50px;" src="{{url($url)}}">
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="brand_docs" class="col-sm-2">Brand Docs</label>
                                <div class="col-sm-4">
                                    <input type="file" class="form-control" name="brand_docs" id="brand_docs" 
                                            data-validation="mime size" 
                                            data-validation-allowing="pdf,json,txt" 
                                            data-validation-max-size="2M">
                                </div>
                                <div class="col-sm-4"></div>
                                <div class="col-sm-1"></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="infographic" class="col-sm-2">Infographic</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="infographic" id="infographic" value="<?php echo isset($dataset->fld_infographic) ? $dataset->fld_infographic : '' ?>" data-validation="required"/>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="infographic_dataset" class="col-sm-2">Infographic Dataset</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="infographic_dataset" id="infographic_dataset" value="<?php echo isset($dataset->infographic_dataset) ? $dataset->infographic_dataset : '' ?>" data-validation="required"/>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="topic" class="col-sm-2">Topic</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="topic" id="topic" value="<?php echo isset($dataset->topic) ? $dataset->topic : '' ?>" data-validation="required"/>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="source_url" class="col-sm-2">Source Url</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="source_url" id="source_url" value="<?php echo isset($dataset->source_url) ? $dataset->source_url : '' ?>" data-validation="required"/>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="language" class="col-sm-2">Language</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="language" id="language" value="<?php echo isset($dataset->language) ? $dataset->language : '' ?>" data-validation="required"/>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col-sm-1"></div>
                                <label for="status" class="col-sm-2">Status</label>
                                <div class="col-sm-8">
                                    <select id="status" class="form-control" name="status" data-validation="required">
                                        <option value="">----Select Status----</option>
                                        <option value="1" <?php if(isset($dataset->fld_dataset_status)){ if($dataset->fld_dataset_status == '1'){echo 'selected';}} ?>>Active</option>
                                        <option value="0" <?php if(isset($dataset->fld_dataset_status)){ if($dataset->fld_dataset_status == '0'){echo 'selected';}} ?>>Inactive</option>
                                    </select>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>

                        </div>
                        <div class="card-footer ">
                            <center><button type="submit" class="btn btn-primary sub-dataset">Submit</button></center>
                        </div>
                    </form>
    </div>
    <!-- /.box-body -->
    
  </div>
  <!-- /.box -->

</section>
<!-- /.content -->

@endsection
@section('bottomscript')

<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>

<!--<script src="{!! asset('js/ckeditor.js')!!}"></script>-->
<script src="{!! asset(ASSET.'js/Admin/dataset.js')!!}"></script>
<script type="text/javascript">
                    $(document).ready(function () {
                        admin.dataset.initialize();
                        CKEDITOR.replace('description');
                    });
</script>
@endsection