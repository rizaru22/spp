<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3>Ubah Username & Password</h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-5">
                        <?php 
                            $id=$_GET['id'];
                            include 'library/config.php';

                            $query=mysqli_query($koneksi,"SELECT * FROM user where id=$id");

                            while($data=mysqli_fetch_array($query)):
                        ?>
                        <form action="library/ubah_pass.php?id=<?=$id?>" method="POST">
                            <label for="">Username</label>
                            <input type="text" name="username" class="form-control" value="<?=$data['username']?>" required><br>
                            <label for="">Password</label>
                            <input type="password" name="pass" class="form-control" placeholder="Password Baru" required><br>
                            <?php endwhile; ?>
                            <input type="submit"  id="" class="btn btn-success" value="Simpan">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>