<?php

$this->extend('layout/main');
$this->section('body');
?>


<h1>Add Office</h1>

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Quick Example</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="<?= base_url() ?>offices_index/store" method="POST">
        <div class="card-body">

            <div class="form-group">
                <label for="exampleInputEmail1">Code</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter code" name="code">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="name">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email">
            </div>



        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
<!-- /.card -->

<?php
$this->endSection();
?>