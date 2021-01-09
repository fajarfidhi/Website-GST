<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading 
    <h1 class="h3 mb-2 text-gray-800">Product</h1>
    -->
    <!-- End Page Heading

    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>
    -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Product</h6>
        </div>
        <div class="card-body">
            <div class="dropdown no-arrow mb-4">
                <button class="btn btn-sm btn-primary" onclick="btn_add()">
                    <i class="fa fa-plus"></i>
                    Add
                </button>
                <button class="btn btn-sm btn-info" onclick="reload_table()">
                    <i class="fa fa-sync-alt"></i>
                    Reload
                </button>
                <button class="btn btn-sm btn-success">
                    <i class="fa fa-file-excel"></i>
                    Excel
                </button>
                <button class="btn btn-sm btn-danger">
                    <i class="fa fa-file-pdf"></i>
                    PDF
                </button>
            </div>

            <div class="table-responsive">
                <table id="tabeldata" class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Picture</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

<!----------------------------------------------- MODAL ADD/UPDATE DATA --------------------->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="myForm" action="" method="POST">
                <div class="modal-body">
                    <div id="the-message"></div>
                    <div class="form-group">
                        <input type="hidden" name="txt_id">
                        <label class="small mb-1" for="txtname">Name</label>
                        <input type="text" class="form-control form-control-sm" id="txtname" name="txtname" placeholder="Name Types...">
                    </div>
                    <div class="form-group">
                        <label class="small mb-1" for="txtdescription">Description</label>
                        <textarea type="text" class="form-control form-control-sm" id="txtdescription" name="txtdescription" placeholder="Name Types..."></textarea>
                    </div>
                    <div class="form-group">
                        <label class="small mb-1" for="txtpicture">Picture</label>
                        <input type="file" class="picture form-control form-control-sm" id="txtpicture" name="txtpicture" placeholder="Name Types...">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="small mb-1" for="txttype">Type Products</label>
                            <select class="form-control form-control-sm" name="txttype" id="txttype">
                                <option value="">--Type Product--</option>
                                <option value="">IP Camera</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="small mb-1" for="txtstatus">Status</label>
                            <select class="form-control form-control-sm" name="txtstatus" id="txtstatus">
                                <option value="">--Status Product--</option>
                                <option value="1">Actived</option>
                                <option value="2">Non Actived</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">
                        Close
                    </button>
                    <div class="float-right">
                        <button type="reset" class="btn btn-secondary" id="btn_reset">
                            <i class="fa fa-undo"></i>
                        </button>
                        <button type="button" class="btn" id="btn_save"></button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-------------------------------------------  MODAL DETAIL -------------------------->
<div class="modal fade" id="myModalDetail">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row text-center">
                    <div class="col-md-12 text-center" style="position: center;">
                        <div id="detail_picture"></div>
                    </div>
                    <div class="col-md-12 font-weight-bold">
                        <h5 id="detail_name"></h5>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <p id="detail_description"></p>
                    </div>

                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-warning" data-dismiss="modal">
                    Close
                </button>
                <div class="float-right">
                    <button type="button" class="btn" data-dismiss="modal" id="btn_update"></button>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!-- /.container-fluid -->
<script type="text/javascript">
    var mode;
    var table;

    $(document).ready(function() {
        table = $('#tabeldata').DataTable({
            "processing": true,
            "serverSide": false,
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "ajax": {
                url: '<?php echo base_url('Products/readall'); ?>',
                type: 'GET',
            }
        });

        $('.datepicker').datepicker({
            autoclose: true,
            format: "yyyy-mm-dd",
            todayHighlight: true,
            orientation: "top auto",
            todayBtn: true,
            todayHighlight: true,
        })
    });

    function reload_table() {
        table.ajax.reload(null, false);
    }

    function btn_add() {
        mode = 'add';
        $('#myModal').modal('show');
        $('#myForm')[0].reset();
        $('#btn_reset').show().text('Reset').addClass('btn-dark');
        $('#btn_save').show().text('Save New Products').addClass('btn-info');
        $('.modal-title').text('Add New Products');
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $('#btn_save').attr('disabled', false);
    }

    function detail_id(idproducts) {
        $('#myModalDetail').modal('show');
        $('.modal-title').text('Detail Products');
        $('#btn_update').show();
        $('#btn_update').text('Update Products').addClass('btn-secondary');
        $.ajax({
            url: "<?= base_url('Products/detail'); ?>/" + idproducts,
            type: 'GET',
            dataType: 'JSON',
            success: function(data) {
                img = new Image();
                img.src = "<?= base_url('/assets/front/img/product/'); ?>" + data.picture;
                $('#detail_picture').append(img);
                $('#detail_name').html(data.name);
                $('#detail_description').html(data.description);
            }
        });
    }

    $(function() {
        $('#btn_update').on('click', function(idproduct) {
            mode = 'update';
            $('myModalDetail').modal('hide');
            $('#myModal').modal('show');
            $('#btn_reset').hide();
            $('.modal-title').text('Update Product');
            $('#btn_update').hide();
            $('#btn_save').show().text('Save Update').addClass('btn-info');
        });
    })

    function update_id($idproduct) {
        mode = 'update';
        $('myModalDetail').modal('hide');
        $('#myModal').modal('show');
        $('#btn_reset').hide();
        $('#btn_save').text('Save Update').addClass('btn-info');
        $('.modal-title').text('Update Product');
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
    }

    $(function() {
        $('#btn_save').on('click', function() {
            $('#btn_save').text('Processing...');
            $('#btn_save').attr('disabled', true);
            var url;

            if (mode == 'add') {
                url = "<?= base_url('Products/save'); ?>";
            } else {
                url = "<?= base_url('Products/update'); ?>";
            }

            $.ajax({
                url: url,
                type: 'POST',
                dataType: 'json',
                data: $('#myForm').serialize(),
                success: function(messsagess) {
                    if (messsagess.success == true) {
                        $('#txtname').removeClass('is-invalid');
                        $('.form-group').removeClass('has-error').removeClass('has-success');
                        $('.text-danger').remove();
                        $('#myForm')[0].reset();
                        $('#txtname').focus();
                        reload_table();
                        if (mode == 'add') {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Data succesfull saved.',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            $('#myModal').modal('show');
                        } else {
                            $('#myModal').modal('hide');
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Data succesfull update.',
                                showConfirmButton: false,
                                timer: 1500
                            })
                        }
                    }
                }

            })
        })
    })


    function delete_id($idproduct) {
        Swal.fire({
                title: "Are you sure?",
                text: "But you will still be able to retrieve this file.",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes",
                cancelButtonText: "No",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        url: "<?= base_url('Products/delete') ?>/" + idproduct,
                        type: 'POST',
                        dataType: 'json',
                        success: function(data) {
                            $('#myModal').modal('hide');
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Data succesfull delete.',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            reload_table();
                        }
                    })
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            }
        );
    }
</script>
</div>
<!-- End of Main Content -->