
			<?php
				include 'header.php';
				include 'auth.php';
			?>
            <br><br>
            <?php
  // Load file koneksi.php
  include "../koneksi.php";
  
  // Ambil data id_atlet yang dikirim oleh index.php melalui URL
  $id = $_GET['id'];
  
  // Query untuk menampilkan data atlet berdasarkan id_atlet yang dikirim
  $query = "SELECT * FROM myanimelist WHERE id_list='".$id."'";
  $sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
  $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
  ?>
            <div class="container">
                <div class="row">
                    <form role="form" action="edit_animelist_proses.php?id=<?php echo $id; ?>" method="POST" id="contact-form" class="contact-form" enctype="multipart/form-data">
                                    
                                    <div class="col-md-12">
                                    <div class="form-group">
                                         <input name="judul" type="text" value="<?php echo $data['judul']; ?>" class="form-control" placeholder="judul" id="judul" disabled data-validation-required-message="judul">
                                    </div>
                                    <div class="form-group">
                                         <input name="judul" type="hidden" value="<?php echo $data['judul']; ?>" class="form-control" placeholder="judul" id="judul" required data-validation-required-message="judul">
                                    </div>
                                    <div>Status<br>
                                        <select name="status" class="form-control">
                                        <option value="<?php echo $data['status']; ?>"><?php echo $data['status']; ?></option>
                                        <option value="watching">Watching</option>
                                        <option value="complete">Complete</option>
                                        <option value="plan to watch">Plan To Watch</option>
                                        </select>
                                        <p class="help-block text-danger"></p>
                               		  </div>
                                    <div>Score<br>
                                        <select name="score"  class="form-control">
                                        <option value="<?php echo $data['score']; ?>"><?php echo $data['score']; ?></option>
                                        <option value="-">-</option>
                                        <option value="10">10</option>
                                        <option value="9">9</option>
                    										<option value="8">8</option>
                    										<option value="7">7</option>
                    										<option value="6">6</option>
                    										<option value="5">5</option>
                    										<option value="4">4</option>
                    										<option value="3">3</option>
                    										<option value="2">2</option>
                                        <option value="1">1</option>
                                        </select>
                                        <p class="help-block text-danger"></p>
                                	</div>
                                	Proses
                                    <div class="form-group">
                                         <input name="proses" value="<?php echo $data['proses']; ?>" type="number" class="form-control" placeholder="proses" value="1" id="proses" required data-validation-required-message="proses" required="">
                                    </div>
                                </div>
                                 <br>
                                
                                <div class="row">
                                <div class="col-md-12">
                                <input type="submit" id="tambah" value="SEND" name="tambah" class="btn btn-success btn-lg">
                              </div>
                              </div>
                            </form>
                </div>
            </div>


			
			</div>
		</div>
		<?php
			include 'footer.php';
		?>

	<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
</body>
</html>