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
            <h3 class="page-header">Daftar Komentar</h3>
        </div>
        <div class="col-lg-12">
            <div class="row text-center">
              <!-- awal isi -->
              <thead>
            <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%" valign="center">
                  <thead>
                  <tr>
                      <th>NO</th>
                      <th>ID KOMENTAR</th>
                      <th>ID TIMELINE</th>
                      <th>ID THREAD</th>
                      <th>ID USER</th>
                      <th>ISI KOMENTAR</th>
                      <th>TANGGAL</th>
                      <th colspan="2">ACTION</th>
                  </tr>
              </thead>
              <tbody>
                      <?php
                          $no = 1;
                          foreach($daftar_komen as $user){
                  ?>
                          <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $user->id_komentar; ?></td>
                      <td><?php echo $user->id_timeline; ?></td>
                      <td><?php echo $user->id_thread; ?></td>
                      <td><?php echo $user->id; ?></td>
                      <td><?php echo $user->isi; ?></td>
                      <td><?php echo $user->tanggal; ?></td>
                      <td><?php echo '<a href="'.base_url().'User_controller/edit_timeline/'.$user->id_komentar.'"><i class="glyphicon glyphicon-pencil"></i></a>'?></td>
                      <td><?php echo '<a href="'.base_url().'User_controller/delete_timeline/'.$user->id_komentar.'" onclick="return confirm(\'Anda yakin akan menghapus komentar '.$user->isi.'?\')"><i class="glyphicon glyphicon-trash"></i></a>'?></td>

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
