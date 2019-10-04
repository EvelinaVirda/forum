
			<?php
				include 'header.php';
			?>
            <br><br>
            <div class="container">
                <div class="row">
                    <form role="form" action="simpan_post.php" method="POST" id="contact-form" class="contact-form" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                <input name="penulis" type="text" value="<?php echo $_SESSION['nama']; ?>" class="form-control" placeholder="penulis" id="penulis" disabled>
                                <input name="penulis" type="hidden" value="<?php echo $_SESSION['nama']; ?>" class="form-control" placeholder="penulis" id="penulis">
                                    </div>
                                </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                         <input name="judul" type="text" class="form-control" placeholder="judul" id="judul" required data-validation-required-message="judul">
                                    </div>
                                </div>
                                </div>
                                <div class="form-group">
                                    Cover Picture<br>
                                    <input type="file" id="images" name="images"/ required>
                                </div>
                                 <div>
                                    Kategori<br>
                                        <select name="kategori" class="form-control">
                                        <option value="Lain">Lain</option>
                                        <option value="Anime">Anime</option>
                                        <option value="game">Games</option>
                                        <option value="Komputer">Komputer</option>
                                        </select>
                                        <p class="help-block text-danger"></p>
                                </div><br>
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


			
			</div>
		</div>
		<?php
			include 'footer.php';
		?>

	<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
</body>
</html>