<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <form action="tugaspemweb2.php" method="post">
<div class="main p-3">
            <div class="text-center">
            <div class="container">
    <div class="mt-3">
    <div class="row justify-content-center mb-3 ">
        <table class="table table-borderless" align="center">
            <thead>
            <tr>
            <th><img src="../Logo/home.png" width="26" height="26"></th>
            <th>|</th>
            <th><img src="../Logo/add.png" width="26" height="26"></th>
            <th>|</th>
            <th><img src="../Logo/insurance.png" width="26" height="26"></th>
            <th>|</th>
            <th><img src="../Logo/info.png" width="26" height="26"></th>
            </tr>
            </thead>
            <tbody>
            <tr style="color: black; font-size: 12px; width: 10px;" >
            <th>Home</th>
            <th></th>
            <th>Register</th>
            <th></th>
            <th>Policy</th>
            <th></th>
            <th>About</th>
            </tr>
            </tbody>
        
        </table>
    <table class="table table-white">
        <?php
 $produk=$_POST['produk'];
 $deskripsi=$_POST['deskripsi'];
 $harga=$_POST['harga'];
 $no_akun=$_POST['no_akun'];
 $bank=$_POST['bank'];
 $nama=$_POST['nama'];
 $jumlah=$_POST['jumlah'];
//  $bank=$_POST['bank'];
//  $no_tlp=$_POST['no_tlp'];
//  $email=$_POST['email'];
 $no_tlp2=$_POST['no_tlp2'];
 $email2=$_POST['email2'];
$total=($harga*$jumlah);
//  echo "<tr><td align='center'>Nama Produk</td></tr>
//  <tr><th>$produk</th></tr>";
 
//  echo "<tr><td align='center'>Email Anda</td></tr>
//  <tr><th>$email2</th></tr>";

//  echo "<tr>"
?>
    <hr>
       <tr>
                <td rowspan="4"><img src="Pongo-725.png" height="200PX" width="200PX" name="foto"></td>
            </tr>
        </tr>
            <tr>
                <td>Nama Produk</td>
                <td>:</td>
                <td><input type="text" name="produk" value="<?php echo $produk ?>" readonly></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td>:</td>
                <td><textarea name="deskripsi" id="" cols="20" rows="5" value=""  readonly><?php echo $deskripsi ?>
                </textarea></td>
            </tr>
            <tr>
                <td>Total Bayar</td>
                <td>:</td>
                <td><input type="text" name="" id="" value="Rp.<?php echo $total ?>" readonly></td>
            </tr>
            <tr>
                <td></td>
                <td>Nomer Akun</td>
                <td>:</td>
                <td><input type="text" name="no_akun" id="" value="123-456-789-0" readonly></td>
            </tr>
            <tr>
                <td></td>
                <td>Bank</td>
                <td>:</td>
                <!-- <td><select name="bank" id="">
                    <option value="Bank1">------</option>
                    <option value="Bank2">BCA</option>
                    <option value="Bank3">BRI</option>
                    <option value="Bank4">Mandiri</option>
                    <option value="Bank5">BNI</option>
                    <option value="Bank6">HSBC</option>
                </select>
                </option></td> -->
                <td><input type="text" name="bank" value="<?php echo $bank ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td>Pemilik Akun</td>
                <td>:</td>
                <td><input type="text" name="nama" id="" value="<?php echo $nama ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td style="color: green;"><input type="checkbox" name="no_tlp" id="" checked >Kirim Ke No.Tlp</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td style="color: green;"><input type="checkbox" name="email" id="" checked>Kirim Ke Email</td>
            </tr>
            <tr>
                <td></td>
                <td>Kirim Bukti melalu No. Tlp</td>
                <td>:</td>
                <td><input type="tel" name="no_tlp2" value="<?php echo $no_tlp2 ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td>Kirim Bukti Melalui Email</td>
                <td>:</td>
                <td><input type="email" name="email2" value="<?php echo $email2 ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="8" align="center"><input type="submit" value="Kembali" class="btn btn-primary" style="background-color: black;
                    width: 200px;"></td>
                    
                 <!-- <td><a href="hasil.html"><input type="submit" value="Pesan"></a></td> -->
                 <!-- <td> <a href="tugaspemweb2.php">KEMBALI    </a></td> -->
            </tr>
            
    </table>
    <?php
            include 'footer.php'
            ?>
    </form>
</body>
</html>
