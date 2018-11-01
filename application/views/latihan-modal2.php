<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>Menampilkan Modal Bootstrap | AmazingLight</title>

   <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<center>
   <h1>Menampilkan Modal Bootstrap!</h1>
   <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Tampilkan!</button>
</center>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Tutup"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Upload Foto Profil</h4>
         </div>

         <div class="modal-body">
           <div class="main-panel">

           <div class="content">
                   <div class="container-fluid">
                     <div class="row">
                       <div class="col-md-4">
                         <div class="card">
                           <div class="card-header card-header-primary">
                             <h4 class="card-title">Upload Foto Profil</h4>
                           </div>
                         <div class="card-body">
                            <?php echo form_open_multipart('upload/aksi_upload');?>
                            <input type="file" name="berkas" >
                            <br>
                            <center><button type="submit" class="btn btn-primary pull-right" value="upload">Update Foto Profil</button></center>
                            </form>
                             </div>
                           </div>
                         </div>
                       </div>

                     </div>
                   </div>

         </div>

      </div>
   </div>
</div>

<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</body>
</html>
