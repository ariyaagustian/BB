<div id="qbootstrap-doctor" class="qbootstrap-bg-section">

			<div class="row">
        <div class="col-md-2 sticky-parent">
					<div id="sticky_item">
            <div class="schedule">
							<div class="desc">
								<span>Cara Memesan Ruang Terapi</span> <hr>
								<span><small> 1. Silakan perhatikan kalender disamping <br>
                      2. Jika anda melihat salah satu sesi jam terapi seperti ini <strike>09.00-10.00</strike> tandanya sesi tersebut sudah dibooking orang lain. Silakan Anda pilih sesi lainnya yang masih tersedia <br>
                      3. Klik sesi jam terapi yang Anda inginkan. Kemudian Anda akan masuk halaman untuk memverifikasi jadwal pesanan Anda. <br>
                      4. Jika semuanya sudah benar, maka klik "Simpan" <br>
                      5. Tunggu sampai 1 hari sebelum jadwal terapi Anda, maka kami akan memberikan sms/email pengingat kepada Anda untuk terapi <br>
                      6. Kemudian Anda datang ke lokasi terapi Tante <br>
                      7. Setelah menggunakan ruang terapi, Anda dapat melakukan pembayaran ke bagian administrasi <br>
                      8. Bukti pembayaran dan riwayat jadwal Anda dapat dilihat di akun Anda </small></span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-10">

						<center><h2> <big> Jadwal terapi </big> </h2>
            <h3>Januari 2019</h3></center>

              <?php
               $tanggala = 1;
               $tanggalb = 31;
              echo "<table border='1' >";
              echo "<tr >
              <th><center>Senin</center></th>
              <th><center>Selasa</center></th>
              <th><center>Rabu</center></th>
              <th><center>Kamis</center></th>
              <th><center>Jumat</center></th>
              <th><center>Sabtu</center></th>
              <th><center>Minggu</center></th>
              </tr>";
               for($x=1;$x<=6;$x++){
                 echo "<tr width='500'>";
                 for($y=1;$y<=7;$y++){
                   if($tanggala<=$tanggalb){
                     if($x==1 && $y<3){
                         echo "<td><center> </center></td>";
                       } else {
                         echo "<td width='200' height='150'><center><big>".$tanggala."</big><br><br> <small><table width='200' >
                          <tr>
                            <td><a href=''><center>09.00-10.00</center></a></td>
                            <td><a href=''><center>09.00-10.00</center></a></td>
                          </tr>
                          <tr>
                            <td><a href=''><center>09.00-10.00</center></a></td>
                            <td><a href=''><center>09.00-10.00</center></a></td>
                          </tr>
                          <tr>
                            <td><a href=''><center>09.00-10.00</center></a></td>
                            <td><a href=''><center>09.00-10.00</center></a></td>
                          <tr>
                          </table></center></td></small>";
                          echo "<div>

                          </div>";
                         $tanggala++;
                       }
                     } else {
                       echo "<td><center> </center></td>";
                     }

                   }
                   echo "</tr>";
                 echo "<br>";
               }



               echo "</table>";



              ?>


				</div>

  </div>
	</div>
