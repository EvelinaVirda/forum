
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
           <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Modules">
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
          <li class="c-menu__item is-active" data-toggle="tooltip" title="member">
            <a href="buat_trit.php"><div class="c-menu__item__inner"><i class="glyphicon glyphicon-trash"></i>
              <div class="c-menu-item__title"><span>Input Anime</span></div>
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
  <form role="form" action="input_proses.php" method="POST" id="contact-form" class="contact-form" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                         <input name="judul" type="text" class="form-control" placeholder="judul" id="judul" required data-validation-required-message="judul">
                                    </div>
                                   <div class="form-group">
                                         <input name="genre" type="textarea" class="form-control" placeholder="genre" id="genre" required data-validation-required-message="genre">
                                    </div>
                                    <div class="form-group">
                                         <input name="episode" type="number" class="form-control" placeholder="jumlah episode" id="episode" required data-validation-required-message="episode">
                                    </div>
                                </div>
                                </div>
                                <div class="form-group">
                                    Cover Picture<br>
                                    <input type="file" id="images" name="images"/ required>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="isi" placeholder="isi" id="isi" class="ckeditor"></textarea>
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-12">
                                <input type="submit" id="tambah" value="SEND" name="tambah" class="btn btn-success btn-lg">
                              </div>
                              </div>
                            </form>
    </div>
  </div>
</main>

<?php
include 'script.php';
?>
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
</body>
</html>