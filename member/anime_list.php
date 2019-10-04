
<?php
include 'header.php';
?>
<body>
       <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-12">

<div class="card mb-4">
    <h1 class="page-title">Anime List</h1>

                  <table class="table table-hover table-striped">
                           <thead>
                          <tr>
                              <th class="hidden-xs">No</th>
                              <th>Pic</th>
                              <th>Judul</th>
                              <th>Genre</th>
                              <th>Episode</th>
                              <th>Descripsi</th>
                              <th>Aksi</th>
                          </tr> 
                        </thead>
                   <?php

    include('../koneksi.php');
    
    $query = mysqli_query($connect, "SELECT * FROM anime_list") or die(mysqli_error());
    
    if(mysqli_num_rows($query) == 0){  
      echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
      
    }else{ 
      $no = 1;  
      while($data = mysqli_fetch_assoc($query)){ 
        ?>
                        <?php
                            echo '<tr>';
          
          echo '<td>'.$no.'</td>'; 
        ?>
          <td>
<?php echo "<img src='../admin/img/".$data['gambar']."' width='70px' height='100px'/>"; ?> 
</td>
          <?php
          echo '<td>'.$data['judul'].'</td>'; 
          echo '<td>'.$data['genre'].'</td>'; 
          echo '<td>'.$data['episode'].'</td>'; 
          echo '<td>'.$data['isi'].'</td>'; 
          echo '<td><a href="add.php?id='.$data['id_anime'].'">Add</a></td>';
        echo '</tr>';?>
        
                            <?php
               $no++;
                      
                    }
                    
                  }
                            ?>
                        </table>
    </div>
</div>
</div>
</div>


</body>
</html>