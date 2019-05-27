<section class="content">

    <div class="col-xs-12">
        <div class="card card-primary">

            <form class="form-horizontal" id="frm_testimonial" name="frm_testimonial" action="" onsubmit="return false" enctype="multipart/form-data">
                <!--        modal-->
                <div class="modal fade" id="ins_tes" role="dialog">
                    <div class="modal-dialog">

                        <!--modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4>Create new account</h4>
                            </div>
                            <div class="modal-body">
                                <p id="msg"></p>
                                {{ csrf_field() }}
                                <input type="hidden" name="id" id="id">
                                <div class="form-group">
                                    <label for="cus_name" class="col-sm-3 control-label">Customer Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="cus_name" id="cus_name" data-validation="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="feedback" class="col-sm-3 control-label">Feedback</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="feedback" id="feedback" data-validation="required"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="user_photo" class="col-sm-3 control-label">User Photo</label>
                                    <div class="col-sm-9">
                                        <input type="file"  name="user_photo" id="user_photo"  data-validation="required"/>
                                        <input type="hidden" name="hdn_file" id="hdn_file">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9">
                                        <img id="u_photo" src="" alt="No Image" class="form-control" style="height: 100px; width: 100px;"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="status" class="col-sm-3 control-label">Status</label>
                                    <div class="col-sm-9">
                                        <select id="status" class="form-control" name="status" data-validation="required">
                                            <option value="">----Select Status----</option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer justify-content-center" >
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary sub_tes" name="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

