
<?php
include 'header.php';
?>
<body>

<body class="sidebar-is-reduced">
  <header class="l-header">
    <div class="l-header__inner clearfix">
      <div class="header-icons-group">
        <a href="../member/logout.php"> <div class="c-header-icon logout"><i class="glyphicon glyphicon-log-out"></i></div></a>
      </div>
    </div>
  </header>
  <div class="l-sidebar">
    
    <div class="l-sidebar__content">
      <nav class="c-menu js-menu">
        <ul class="u-list">
          <li class="c-menu__item is-active" data-toggle="tooltip" title="member">
            <a href="member.php"><div class="c-menu__item__inner"><i class="glyphicon glyphicon-user"></i>
              <div class="c-menu-item__title"><span>member</span></div>
            </div></a>
          </li>
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Modules">
            <a href="komentar.php"><div class="c-menu__item__inner"><i class="glyphicon glyphicon-comment"></i>
              <div class="c-menu-item__title"><span>Comment</span></div>
              <div class="c-menu-item__expand js-expand-submenu"><i class="fa fa-angle-down"></i></div>
            </div></a>
          </li>
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Statistics">
            <a href="post.php"><div class="c-menu__item__inner"><i class="glyphicon glyphicon-globe"></i>
              <div class="c-menu-item__title"><span>POST</span></div>
            </div></a>
          </li>
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Statistics">
            <a href="buat_trit.php"><div class="c-menu__item__inner"><i class="glyphicon glyphicon-trash"></i>
              <div class="c-menu-item__title"><span>Create Thread</span></div>
            </div></a>
          </li>
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Statistics">
            <a href="post_anime.php"><div class="c-menu__item__inner"><i class="glyphicon glyphicon-trash"></i>
              <div class="c-menu-item__title"><span>Anime List</span></div>
            </div></a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</body>
<main class="l-main">
  <div class="content-wrapper content-wrapper--with-bg">
    <h1 class="page-title">Member</h1>
    <div class="page-content">
                <div class="row">
                	<table class="table table-hover table-striped">
                        	 <thead>
			                    <tr>
			                        <th class="hidden-xs">No</th>
			                        <th>Nama</th>
			                        <th>Email</th>
                              <th>pass</th>
			                        <th>Telp</th>
			                        <th>Aksi</th>
			                    </tr> 
			                  </thead>
                	 <?php

    include('../koneksi.php');
    
    $query = mysqli_query($connect, "SELECT * FROM member") or die(mysqli_error());
    if(mysqli_num_rows($query) == 0){  
      echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
      
    }else{ 
      $no = 1;  
      while($data = mysqli_fetch_assoc($query)){ 
      	?>
                        <?php
                            echo '<tr>';
          
          echo '<td>'.$no.'</td>';  
          echo '<td>'.$data['nama'].'</td>'; 
          echo '<td>'.$data['email'].'</td>'; 
          echo '<td>'.$data['password'].'</td>';  
          echo '<td>'.$data['telp'].'</td>';
          echo '<td><a href="hapus_member.php?id='.$data['id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';
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
  </div>
</main>

<?php
include 'script.php';
?>
</body>
</html>