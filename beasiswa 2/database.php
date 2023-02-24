    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
        <div class="wrapper">
            <div class="logo"><a href=''>Beasiswa Indonesia</a></div>
            <div class="menu">
                <ul>
                    <li><a href="halaman-utama.php">Home</a></li>
                    <li><a href="database.php">Data Pendaftar</a></li>
                    <li><a href="daftar.php" class="tbl-biru">Daftar</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Pendaftar Beasiswa
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Nomor Handphone</th>
                                    <th scope="col">Semester</th>
                                    <th scope="col">IPK</th>
                                    <th scope="col">Pilihan Beasiswa</th>
                                    <th scope="col">Berkas</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                      include('connect.php');
                      $no = 1;
                      $query = mysqli_query($con,"SELECT * FROM beasiswa");
                      while($row = mysqli_fetch_array($query)){
                  ?>
                                <tr>
                                    <td>
                                        <?php echo $no++ ?>
                                    </td>
                                    <td>
                                        <?php echo $row['nama'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['email'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['telp'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['smtr'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['ipk'] ?>
                                    </td>
                                    <td>
                                       <?php
                                            $pilihan = $row['pilihan'];
                                            if($pilihan==0){
                                                echo "Beasiswa Akademik";
                                            }
                                            else{
                                                echo "Beasiswa Non Akademik";
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php echo $row['berkas'] ?>
                                    </td>
                                    <td>
                                        <?php
                                            $status = $row['status_ajuan'];
                                            if($status==0){
                                                echo "Belum diverifikasi";
                                            }
                                            else{
                                                echo "Sudah Diverifikasi";
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="verifikasi.php?id=<?= $row['id'] ?>&status_ajuan=<?= $row['status_ajuan'] ?>" class="btn btn-sm btn-primary">VERIFIKASI</a>
                                        <a href="update.php?id=<?= $row['id'] ?>&pilihan=<?= $row['pilihan'] ?>" class="btn btn-sm btn-primary">UPDATE</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>