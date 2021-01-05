<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data <?= $title; ?></h6>
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
                        <input type="file" class="form-control form-control-sm" id="txtpicture" name="txtpicture" placeholder="Name Types...">
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
                        <button type="reset" class="btn btn-secondary" id="btn_reset" onclick="btnReset()">
                            <i class="fa fa-undo"></i>
                        </button>
                        <button type="button" class="btn btn-primary" id="btn_save" onclick="btnSave()"></button>
                    </div>
                </div>
            </form>
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
                url: '<?php echo base_url('Portfolio/readall'); ?>',
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
        $('#btn_reset').show();
        $('#btn_reset').text('Reset');
        $('#btn_save').text('Save');
        $('.modal-title').text('Add New Portfolio');
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
    }
</script>
</div>
<!-- End of Main Content -->