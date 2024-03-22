<?php include("inc_header.php")?>
        <?php
        $katakunci = (isset($_GET['katakunci']))?$_GET['katakunci']:"";
        ?>
        <h1>Halaman Admin</h1>
        <p>
            <a href="halaman_input.php">
                <input type="button" class="btn btn-primary" value="Buat Halaman Baru"/>
            </a>
        </p>
        <form class="row g-3" method="get">
            <div class="col-auto">
                <input type="text" class="form-control" placeholder="Masukkan Kata Kunci" name="katakunci" value="<?php echo $katakunci?>"/>
            </div>
            <div class="col-auto">
                <input type="submit" name="cari" value="Cari Tulisan" class="btn btn-secondary"/>
            </div>
        </form>
        <table class="table table-striped">
            <thead>
                <tr> 
                    <th class="col-1">#</th>
                    <th>Judul</th>
                    <th>Kutipan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, nostrum.</td>
                    <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
                    <td>
                        <span class="badge text-bg-warning">Edit</span>
                        <span class="badge text-bg-info">Delete</span>
                    </td>
                </tr>
            </tbody>
        </table>
<?php include("inc_footer.php")?>