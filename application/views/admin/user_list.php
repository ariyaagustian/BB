<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Daftar User</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
  </head>
  <body>

<div id="page-wrapper">

    <?php if($this->session->flashdata('success')):?>
        &nbsp;<div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong><?php echo $this->session->flashdata('success'); ?></strong>
        </div>
    <?php elseif($this->session->flashdata('error')):?>
        &nbsp;<div class="alert alert-warning">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong><?php echo $this->session->flashdata('error'); ?></strong>
        </div>
    <?php endif;?>
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Daftar User</h3>
        </div>
        <div class="col-lg-12">
            <div class="row text-center">
              <!-- awal isi -->
              <thead>
            <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                  <tr>
                      <th>NO</th>
                      <th>ID</th>
                      <th>LEVEL</th>
                      <th>NAMA</th>
                      <th>USERNAME</th>
                      <th>PASSWORD</th>
                      <th>NIM</th>
                      <th>JURUSAN</th>
                      <th>EMAIL</th>
                      <th>TLP</th>
                      <th colspan="2">ACTION</th>
                  </tr>
              </thead>
              <tbody>
                      <?php
                          $no = 1;
                          foreach($daftar_user as $user){
                  ?>
                          <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $user->id; ?></td>
                      <td><?php echo $user->level; ?></td>
                      <td><?php echo $user->nama; ?></td>
                      <td><?php echo $user->username; ?></td>
                      <td><?php echo $user->password; ?></td>
                      <td><?php echo $user->nim; ?></td>
                      <td><?php echo $user->jurusan; ?></td>
                      <td><?php echo $user->email; ?></td>
                      <td><?php echo $user->tlp; ?></td>
                      <td><?php echo '<a href="'.base_url().'user_controller/edit_user/'.$user->id.'"><i class="glyphicon glyphicon-pencil"></i></a>'?></td>
                      <td><?php echo '<a href="'.base_url().'user_controller/delete_user/'.$user->id.'" onclick="return confirm(\'Anda yakin akan menghapus '.$user->username.'?\')"><i class="glyphicon glyphicon-trash"></i></a>'?></td>

                  </tr>
                     <?php } ?>
              </tbody>

              </table>
              <!-- akhir isi -->
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- wrapper -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
</script>
</body>
</html>
