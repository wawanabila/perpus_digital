<h1 class="mt-4">Buku</h1>
<div class="card">
    <div class="card-body">
<div class="row">
    <div class="col-md-12">
      <form method="post">
      <?php
      $id = $_GET['id'];
         if(isset($_POST['submit'])) {
            $judul = $_POST['judul'];
            $penulis = $_POST['penulis'];
            $penerbit = $_POST['penerbit'];
            $tahun_terbit = $_POST['tahun_terbit'];
            $query = mysqli_query($koneksi, "UPDATE buku SET judul='$judul', penulis='$penulis', penerbit='$penerbit', tahun_terbit='$tahun_terbit' WHERE id_buku=$id");
            if($query) {
                echo'<script>alert("Ubah data berhasil");</script>';
            }else{
                echo'<script>alert("Ubah data gagal");</script>';
            }
         }
         $query = mysqli_query($koneksi, "SELECT*FROM buku WHERE id_buku=$id");
         $data = mysqli_fetch_array($query);
      ?>
        <div class="row mb-3">
            <div class="col-md-2">Judul</div>
            <div class="col-md-8"><input type="text" value="<?php echo $data['judul']; ?>" class="form-control" name="judul"></div>
        </div>
        <div class="row mb-3">
            <div class="col-md-2">Penulis</div>
            <div class="col-md-8"><input type="text" value="<?php echo $data['penulis']; ?>" class="form-control" name="penulis"></div>
        </div>
        <div class="row mb-3">
            <div class="col-md-2">Penerbit</div>
            <div class="col-md-8"><input type="text" value="<?php echo $data['penerbit']; ?>" class="form-control" name="penerbit"></div>
        </div>
        <div class="row mb-3">
            <div class="col-md-2">Tahun Terbit</div>
            <div class="col-md-8"><input type="number" value="<?php echo $data['tahun_terbit']; ?>" class="form-control" name="tahun_terbit"></div>
        </div>
        <div class="row mb-3">
            <div class="col-md-2"></div>
            <div class="col-md-8">
        <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
        <a href="?page=buku" class="btn btn-danger">Kembali</a>
            </div>
        </div>
      </form>
    </div>
</div>
    </div>
</div>