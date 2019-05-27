admin.reports = {
    initialize: function ()
    {
        var this_class = this;

        $('body').on('click', '.btnDelete_reports', function () {
            var id = $(this).data('id');
            this_class.delete_row(id);
        });

        admin.reports.load_reports();
        admin.reports.refresh_validator();

//        $("#title").blur(function () {
//            var Text = $(this).val();
//            Text = Text.toLowerCase();
//            Text = Text.replace(/[^a-zA-Z0-9]+/g, '-');
//            $("#slug").val(Text);
//        });

//        var url = window.location.pathname;
//        var id = url.substring(url.lastIndexOf('/') + 1);
//        if ($.isNumeric(id)) {
//            this_class.get_details_foredit(id)
//        }

    },
//    get_details_foredit: function (id) {
//
//        if (id > 0) {
//            $.ajax({
//                url: BASE_URL +'/'+ ADMIN+'/reports/edit',
//                type: 'POST',
//                data: {_token: admin.common.get_csrf_token_value(), id: id},
//                success: function (data) {
//                    var data = $.parseJSON(data);
//                    if (data.status == 1) {
//                        $("#id").val(data.content.id);
//                        $("#title").val(data.content.title);
//                        $("#short_desc").val(data.content.short_desc);
//                        $("#price").val(data.content.price);
//                        $("#pages").val(data.content.pages);
//                        $("#language").val(data.content.language);
//                        $("#release_date").val(data.content.release_date);
//                        var status_id = $("#status").val(data.content.status);
//                        status_id.attr("selected", "selected");
//                    }
//                }
//
//            });
//        }
//        else {
//            return false;
//        }
//
//    },
    load_reports: function () {

        var table = jQuery('.reports-table').DataTable({
            paging: true,
            pageLength: 10,
            bDestroy: true,
            responsive: true,
            processing: true,
            serverSide: true,
//            "order": [[0, "desc"]],
            ajax: {
                url: BASE_URL +'/'+ ADMIN+'/reports/getdata',
                type: "POST",
                data: admin.common.get_csrf_toke_object_data()
            },
            columns: [
//                        { data: 'id', name: 'id'},
                {data: 'title', name: 'title'},
                {data: 'cat_name', name: 'cat_name'},
                {data: 'short_desc', name: 'short_desc'},
                {data: 'price', name: 'price'},
                {data: 'pages', name: 'pages'},
                {data: 'language', name: 'language'},
                {data: 'release_date', name: 'release_date'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
        });

    },
    refresh_validator: function () {
        $.validate({
            form : '#frm_reports',
             onSuccess : function() {
                 for (instance in CKEDITOR.instances) 
                    {
                        CKEDITOR.instances['description'].updateElement();
                    }
                    $.ajax({
                        type: 'POST',
                        url: BASE_URL +'/'+ ADMIN+'/reports/add',
                        data: $('#frm_reports').serialize(),
                        datatype: 'json',
                        success: function (data) {
                            var data = $.parseJSON(data);
                            if (data.status == 1) {
                                window.location.href = BASE_URL +'/'+ ADMIN+'/reports/list';
                            }
                            else {
                                return false;
                            }
                        }
                    });
              },
          });
    },
    delete_row: function (id) {

        if(confirm("Are you sure ?")){
            if (id > 0) {
                $.ajax({
                    url: BASE_URL +'/'+ ADMIN+'/reports/delete',
                    type: 'POST',
                    data: {_token: admin.common.get_csrf_token_value(), id: id},
                    success: function (data) {
                        var data = $.parseJSON(data);
                        if (data.status == 1) {
                            $('#msg_main').html(data.msg);
                            $('#msg_main').attr('style', 'color:green;');
                            admin.reports.load_reports();
                        }
                    }
                });
            }
        } else {
            return false;
        }

    },
//    
};