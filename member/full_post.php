<?php 
    include 'header.php';
?>
    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4">
            <small></small>
          </h1>
                               <?php
              include "../koneksi.php";
              $id = $_GET ['p'];
              $query = mysqli_query($connect, "SELECT * FROM post where id = '$id'") or die(mysqli_error());
              ?>

               <?php
              while($data = mysqli_fetch_assoc($query)){ 
              ?>
                                
                                    
          <!-- Blog Post -->
          <div class="card mb-4">
            <div class="card-footer text-muted">
              <?php echo 'Kategori : '.$data['kategori'].'';?>&nbsp&nbsp&nbsp&nbsp
              <?php echo 'Penulis : '.$data['penulis'].'';?>
              <img width="750" height="300" class="card-img-top" valign='bottom' src="img/<?php echo $data['gambar']; ?>">
              
          </div>
            <div class="card-body">
              <h2 class="card-title"><?php echo '<h3>'.$data['judul'].'</h3>'; ?></h2>
              <p class="card-title"><?php echo $data['isi']; ?></p>
            </div>
            <div class="card-footer text-muted">
              <?php echo 'tanggal : '.$data['tgl'].'';?>
            </div>
          </div>
<?php
                                }
                                ?>
                                 <hr><h3 style="color: white"> COMMENT </h3><hr>
            <?php
  include "../koneksi.php";
  
  $id_komen = $_GET['p'];
  
  $query = "SELECT * FROM post WHERE id='".$id_komen."'";
  $sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
  $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
  ?>  
  
      
         

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <?php
       include 'search.php'; 
        ?>  

         <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="kategori_komputer.php">Komputer</a>
                    </li>
                    <li>
                      <a href="kategori_game.php">Games</a>
                    </li>
                    <li>
                      <a href="kategori_anime.php">Anime</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
         
          </div>

        </div>

      </div>
      <!-- /.row -->

    <!-- /.container -->  
               <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4">
            <small></small>
          </h1>
                  <form method="post" action="komen_proses.php" novalidate>
                                <input name="id" type="hidden" value="<?php echo $data['id']; ?>" id="id" >
                                <label for="name"></label>
                                <input name="name" type="text" value="<?php echo $_SESSION['nama']; ?>"  placeholder="Name" id="name" disabled>
                                <p class="help-block text-danger"></p>
                                <input name="name" type="hidden" value="<?php echo $_SESSION['nama']; ?>"  placeholder="Name" id="name">
                                <p class="help-block text-danger"></p>
                                <textarea name="message" class="ckeditor" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <input type="submit" id="tambah" value="SEND" name="tambah" class="btn btn-success btn-lg">
                            </div>
                        </div>
                    </form>
      <?php
       include '../koneksi.php';
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM post 
        INNER JOIN komentar
        ON post.id = komentar.id
        WHERE komentar.id = '" . $id ."'";
      $result = mysqli_query($connect, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($connect).
           " - ".mysqli_error($connect));
      }

      //buat perulangan untuk element tabel dari data mahaatlet
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($data = mysqli_fetch_assoc($result))
      {?>
  <fieldset>
    <div class="container">
      <div class="row">
         <div class="comment-box">
                <h4 class="title"><?php echo "$data[nama]";?></h4>
                <?php echo "<p>$data[tgl]</p>";?>
                <?php echo "$data[isi]";?>
            </div>
      </div>
    </div>
  </fieldset>
  <?php
  }
      ?><br><br>
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
    <?php
    include 'footer.php';
?>
