<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <form action="hasil.php" method="post">
        <div class="main p-3">
            <div class="text-center">
            <div class="container">
    <div class="mt-3">
    <div class="row justify-content-center mb-3 ">
        <table class="table table-borderless" align="center">
        <thead>
                    <tr>
                        <th><img src="../Logo/home.png" width="36" height="36" ></th>
                        <th>|</th>
                        <th><img src="../Logo/link.png" width="26" height="26" ></th>
                        <th>|</th>
                        <th><img src="../Logo/bill.png" width="26" height="26" ></th>
                        <th>|</th>
                        <th><img src="../Logo/insurance.png" width="26" height="26" ></th>
                        <th>|</th>
                        <th><img src="../Logo/logout.png" width="26" height="26" ></th>
                    </tr>
        </thead>
        <tbody>
            <tr style="color: black; font-size: 12px; width: 10px;" >
            <th>Home</th>
            <th></th>
            <th>Generate Link</th>
            <th></th>
            <th>Transaction History</th>
            <th></th>
            <th>Policy</th>
            <th></th>
            <th>Logout</th>
        </tbody>
        </table>
        <table class="table table-white">
            <hr>
            <tr>
                <td rowspan="4"><img src="Pongo-725.png" height="200PX" width="200PX" name="foto"></td>
            </tr>
        </tr>
            <tr>
                <td>Nama Produk</td>
                <td>:</td>
                <td><input type="text" name="produk" value="Axioo Pongo 725" readonly></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td>:</td>
                <td><textarea name="deskripsi" id="" cols="20" rows="5" readonly>Tahun : 2023           Model : Gaming
Kondisi : Bagus
                </textarea></td>
            </tr>
            <tr>
             
                <td>Harga</td>
                <td>:</td>
                <td><input type="number" name="harga" id="" value="9999000" ></td>
            </tr>
            <tr>
                <td></td>
                <td>Nomer Akun</td>
                <td>:</td>
                <td><input type="text" name="no_akun" id="" value="123-456-789-0"></td>
            </tr>
            <tr>
                <td></td>
                <td>Bank</td>
                <td>:</td>
                <td><select name="bank" id="">
                    <option value="Bank1">------</option>
                    <option value="BCA">BCA</option>
                    <option value="BRI">BRI</option>
                    <option value="Mandiri">Mandiri</option>
                    <option value="BNI">BNI</option>
                    <option value="HSBC">HSBC</option>
                </select>
                </option></td>
            </tr>
            <tr>
                <td></td>
                <td>Pemilik Akun</td>
                <td>:</td>
                <td><input type="text" name="nama" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td>Jumlah Beli</td>
                <td>:</td>
                <td><select name="jumlah" id="">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td style="color: green;"><input type="checkbox" name="no_tlp" id="" required>Kirim Ke No.Tlp</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td style="color: green;"><input type="checkbox" name="email" id="" required>Kirim Ke Email</td>
            </tr>
            <tr>
                <td></td>
                <td>Kirim Bukti melalu No. Tlp</td>
                <td>:</td>
                <td><input type="tel" name="no_tlp2" ></td>
            </tr>
            <tr>
                <td></td>
                <td>Kirim Bukti Melalui Email</td>
                <td>:</td>
                <td><input type="email" name="email2" ></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="8" align="center"><input type="submit" value="Pesan Sekarang"class="btn btn-primary" style="background-color: black;
                    width: 200px;"
                ></td>
                 <!-- <td><a href="hasil.html"><input type="submit" value="Pesan"></a></td> -->
            </tr>
            <tr>
                <td></td>
                <td  colspan="8" align="center"><input type="reset" value="Hapus" class="btn btn-danger" style="width: 200px;"></td>
            </tr>
        </table>
        <?php 
        include 'footer.php'
        ?>
    </form>
</body>
</html>