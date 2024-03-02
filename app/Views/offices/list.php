<?php

$this->extend('layout/main');
$this->section('body');
?>

<?php
if(session()->getFlashdata('success')):?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?= session()->getFlashdata('success')?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif;

?>
<h1>Office List</h1>
<a href="<?= base_url() ?>offices_index/create" class="btn btn-primary">Add Office</a>

<table class="table">
<thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Code</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">Action</th>
</tr>
</thead>

</table>


<?php
$this->endSection();
?>