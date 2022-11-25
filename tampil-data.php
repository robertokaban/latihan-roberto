<!doctype HTML>
<html>
<head>
    <title>Data Buku</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="DataTables/datatables.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>Data Buku</h1>
            <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Penyimpanan Berhasil!
                    </div>
            <?php

            }

            ?>


            <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Data Berhasil Dihapus!
                    </div>
            <?php

            }

            ?>

            <?php 

            if(@$_GET['pesan']=="editBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Perubahan Berhasil!
                    </div>
            <?php

            }

            ?>


        <table id="dataTables" class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th><th>ISBN</th><th>Judul </th><th>Jenis</th><th>Tahun terbit</th><th>Penerbit</th><th>Pengarang</th>
                <th>
                    <a href="input-data.php">
                        <button class="btn btn-info glyphicon glyphicon-plus"></button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "koneksi.php";
        $sql=$koneksi->query("select * from buku");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['id_buku']?></td>
                <td><?php echo $row['isbn']?></td>
                <td><?php echo $row['judul']?></td>
                <td><?php echo $row['jenis']?></td>
                <td><?php echo $row['tahun_terbit']?></td>
                <td><?php echo $row['penerbit']?></td>
                <td><?php echo $row['pengarang']?></td>
                <td>

                <a href="edit.php?id=<?php echo $row['id_buku']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
                </a>

                <a href="hapusa.php?id=<?php echo $row['id_buku']?>" onclick=" return confirm('Anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
                </a>

                </td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div>


<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<script src="DataTables/datatables.min.js"></script>

<script type="text/javascript">
 $(document).ready(function(){
     $('#dataTables').DataTable();
 });

</script>

</body>
</html>