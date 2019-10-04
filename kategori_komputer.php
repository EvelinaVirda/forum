
			<?php
				include 'header.php';
			?>
			 <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

<br>                                <?php
								include "koneksi.php";
								$query = mysqli_query($connect, "SELECT * FROM post where kategori like 'komputer' ORDER by id DESC LIMIT 5") 
								?>
                               	<?php
								while($data = mysqli_fetch_assoc($query)){ 
								?>
                                
                                    
          <!-- Blog Post -->
          <div class="card mb-4">
            <div class="card-footer text-muted">
              <?php echo 'Kategori : '.$data['kategori'].'';?>&nbsp&nbsp&nbsp&nbsp
              <?php echo 'Penulis : '.$data['penulis'].'';?>
          </div>
            <img width="750" height="300" class="card-img-top" valign='bottom' src="member/img/<?php echo $data['gambar']; ?>">
            <div class="card-body">
              <h2 class="card-title"><?php echo '<h3>'.$data['judul'].'</h3>'; ?></h2>
             <?php echo '<a href="full_post.php?p='.$data['id'].'">'?>Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              <?php echo 'tanggal : '.$data['tgl'].'';?>
            </div>
          </div>
<?php
                                }
                                ?>
         
          <!-- Pagination -->
         

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
           <?php
       include 'search.php'; 
        ?>  

       <?php
       include 'kategori.php'; 
        ?>          
		<?php
			include 'footer.php';
		?>