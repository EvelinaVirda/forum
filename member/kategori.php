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
          <div class="card my-4">
            <h5 class="card-header">Latest POST</h5>
            <div class="card-body">
             <?php
                                include "../koneksi.php";
                                $query = mysqli_query($connect, "SELECT * FROM post ORDER by id DESC LIMIT 10") 
                                ?>
                                
                                <?php
                                while($data = mysqli_fetch_assoc($query)){ 
                                ?>
          <!-- Blog Post -->
              
              <?php echo '<a href="full_post.php?p='.$data['id'].'">'?><?php echo $data['judul']; ?></a><br><hr>
<?php
                                }
                                ?>
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->