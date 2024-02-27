<h1 class="mt-4 text-center">Buku</h1>
<div class="row">
    <div class="col-md-12">
        <a href="?page=buku_tambah" class="btn btn-primary">Tambah Data +</a>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
            </tr>
          <?php
          $i = 1;
          $query = mysqli_query($koneksi, "SELECT*FROM buku");
          while($data = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $data['judul']; ?></td>
                <td><?php echo $data['penulis']; ?></td>
                <td><?php echo $data['penerbit']; ?></td>
                <td><?php echo $data['tahun_terbit']; ?></td>
                <td>
                    <a href="?page=buku_ubah&&id=<?php echo $data['id_buku']; ?>" class="btn btn-info">ubah</a>
                    <a onclick="return confirm('Apakah Anda Yakin ?');"  href="?page=buku_hapus&&id=<?php echo $data['id_buku']; ?>" class="btn btn-danger">hapus</a>
                </td>
            </tr>
            <?php
          }
          ?>
        </table>
    </div>

</div>