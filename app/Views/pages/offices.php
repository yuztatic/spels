<?= $this->extend('templates/admin_template'); ?>

<?= $this->section('contentarea'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Office Management</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">

            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">

                <table id="dataTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Office ID</th>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                </table>
            </div>

        </div>


    </div>

</section>

<?= $this->endSection(); ?>

<?= $this->section('pagescript'); ?>
<script>
    let table = $('#dataTable').DataTable({
        responsive: true,
        processing: true,
        serverSide: true,
        paging: true,
        lengthChange: true,
        lengthMenu: [5, 10, 20, 50],
        searching: true,
        ordering: true,
        ajax: {
            url: "<?= base_url('offices/list'); ?>",
            type: "POST" //post po na verb hindi po get
        },
        columns: [{
            data: "id",
        }, {
            data: "code",
        },{
            data: "name",
        },{
            data: "email",
        },{
            data: "",
                defaultContent:`
                <td>
                <button type="button" class="btn btn-primary btn-sm btn-edit" id="editBtn" >Edit</button>
                <button type="button" class="btn btn-danger btn-sm btn-delete" id="deleteBtn" >Delete</button>
                </td>
                `,
        }
    
    
    
    
        ]

    });
</script>
<?= $this->endSection(); ?>