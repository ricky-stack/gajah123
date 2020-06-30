<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
 <!-- Bootstrap CSS -->
 <link  rel ='Stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css"></link>
	<h3>Tambah Data</h3>

	<a href="../anggota"> Kembali</a>
	
	<br/>
	<br/>

	<form action="proses_tambah2" method="post">
    <table>
		{{ csrf_field() }}
		<tr>
        <td>Id Anggota</td>
        <td><input type="text" name="Id_Anggota" required="required"> <br/></td>
        </tr>
        <tr>
        <tr>
        <td>Nama</td>
        <td> <input type="text" name="Nama" required="required"><br/></td>
        </tr>
        <tr>
        <td>Alamat</td>
        <td> <input type="text" name="Alamat" required="required"><br/></td>
        </tr>
        <tr>
        <td>No Telp</td>
        <td> <input type="text" name="No_Telp" required="required"><br/></td>
        </tr>
        <tr>
        <td>Tanggal Lahir</td>
        <td> <input type="text" name="Tgl_Lahir" required="required"><br/></td>
        </tr>
       
        <td></td>
        <td><input type="submit" value="Simpan Data"></td>
        </tr>
        </table>
	</form>

</body>
</html>