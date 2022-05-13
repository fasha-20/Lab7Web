<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>PHP Dasar</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="bio">
        <h2 class="biodata">BIODATA</h2>
        <hr>
        <form action="POST">
            <label for="">Nama</label>
            <input class="nama" type="text" name=nama id="" placeholder="Memasukkan Nama...">
            <br>
            <label for="">Tanggal Lahir</label>
            <input class="nama" type="date" name="Tanggal Lahir" value="">
            <br>
            <label for="Job">Pekerjaan</label>
            <select class="nama" name="job" id="job">
                <option value="pilih">Pilih...</option>
                <option value="karyawan swasta">Karyawan Swasta</option>
                <option value="buruh">Buruh</option>
                <option value="guru">Guru</option>
                <option value="arsitek">Arsitek</option>
            </select>
            <br>
            <input type="submit" class="kirim" name="submit" value="Submit">
            <hr>
        </form>
    </div>

    <div class="output">
        <?php
        echo @'nama' . @$_POST['nama'];
        echo '<br>';

        $tanggal_lahir = new DateTime(@$_POST['Tanggal']);
        $sekarang = new DateTime('today');
        if ($tanggal_lahir > $sekarang){
            $thn = "0";
            $bln = "0";
            $tgl = "0";
        }
        $thn = $sekarang->diff($tanggal_lahir)->y;
        echo "Umur " . "( " . $thn . " Tahun )";
        echo '<br>';

        echo 'pekerjaan ' . @$_POST['job'];
        echo '<br>';
        if (@$_POST['job'] == 'karyawan swasta'){
            echo 'gaji Rp. 3.000.000 - 5.000.000 juta';
        } else if (@$_POST['job'] == 'buruh'){
            echo 'gaji Rp. 1.800.000 - 2.000.000 Juta';
        } else if (@$_POST['job'] == 'guru'){
            echo 'gaji Rp. 1.500.000 - 2.350.000 Juta';
        } else if (@$_POST['job'] == 'arsitek'){
            echo 'gaji Rp. 4.300.000 - 7.000.000 Juta';
        } else {
            echo 'Tidak Memiliki Pekerjaan';
        }
        ?>
    </div>
</body>
</html>