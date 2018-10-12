<html>
<head>
    <title><?php echo $judul; ?></title>
</head>
<body>
    <h1>Daftar User</h1>
    <table border="1">
        <thead>
        <tr>
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
                foreach($daftar_user as $user){
        ?>
                <tr>
            <td><?php echo $user->id; ?></td>
            <td><?php echo $user->level; ?></td>
            <td><?php echo $user->nama; ?></td>
            <td><?php echo $user->username; ?></td>
            <td><?php echo $user->password; ?></td>
            <td><?php echo $user->nim; ?></td>
            <td><?php echo $user->jurusan; ?></td>
            <td><?php echo $user->email; ?></td>
            <td><?php echo $user->tlp; ?></td>
            <td><?php echo '<a href="'.base_url().'user_controller/edit_user/'.$user->id.'">Edit</a>'?></td>
            <td><?php echo '<a href="'.base_url().'user_controller/delete_user/'.$user->id.'" onclick="return confirm(\'Anda yakin akan menghapus '.$user->username.'?\')">Delete</a>'?></td>

        </tr>
           <?php } ?>
    </tbody>
    <tfoot>
        <tr>
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
    </tfoot>
    </table>
</body>
</html>
