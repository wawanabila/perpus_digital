<h1 class="mt-4 text-center">Kategori Buku</h1>
<div class="row">
    <div class="col-md-12">
        <a href="?page=kategori_tambah" class="btn btn-primary">Tambah Data +</a>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>
          <?php
          $i = 1;
          $query = mysqli_query($koneksi, "SELECT*FROM kategori_buku");
          while($data = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $data['nama_kategori']; ?></td>
                <td>
                    <a href="?page=kategori_ubah&&id=<?php echo $data['id_kategori']; ?>" class="btn btn-info">ubah</a>
                    <a onclick="return confirm('Apakah Anda Yakin ?');"  href="?page=kategori_hapus&&id=<?php echo $data['id_kategori']; ?>" class="btn btn-danger">hapus</a>
                </td>
            </tr>
            <?php
          }
          ?>
        </table>
    </div>

</div>