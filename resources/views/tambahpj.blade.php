<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
 <!-- Bootstrap CSS -->
 <link  rel ='Stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css"></link>
	<h3>Tambah Data</h3>

	<a href="../pinjam"> Kembali</a>
	
	<br/>
	<br/>

	<form action="proses_tambah3" method="post">
    <table>
		{{ csrf_field() }}
		<tr>
        <td>No Pinjam</td>
        <td><input type="text" name="No_Pinjam" required="required"> <br/></td>
        </tr>
        <tr>
        <tr>
        <td>Id Anggota</td>
        <td> <input type="text" name="Id_Anggota" required="required"><br/></td>
        </tr>
        <tr>
        <td>No Buku</td>
        <td> <input type="text" name="No_Buku" required="required"><br/></td>
        </tr>
        <tr>
        <td>Tanggal Pinjam</td>
        <td> <input type="text" name="Tgl_Pinjam" required="required"><br/></td>
        </tr>
        <tr>
        <td>Tanggal Kembali</td>
        <td> <input type="text" name="Tgl_Kembali" required="required"><br/></td>
        </tr>
       
        <td></td>
        <td><input type="submit" value="Simpan Data"></td>
        </tr>
        </table>
	</form>

</body>
</html>