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
              include "koneksi.php";
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
              <img width="750" height="300" class="card-img-top" valign='bottom' src="member/img/<?php echo $data['gambar']; ?>">
              
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
         
         

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <?php
       include 'search.php'; 
        ?>  

       <?php
       include 'kategori.php'; 
        ?>          <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4">
            <small></small>
          </h1>
                  
      <?php
       include 'koneksi.php';
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

<p style="color: white">Silahkan <a href="login.php">Login</a> atau <a href="join.php">Join</a> untuk berkomentar</p>


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
