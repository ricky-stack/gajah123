<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
 <!-- Bootstrap CSS -->
 <link  rel ='Stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css"></link>
	<h3>Tambah Data</h3>

	<a href="../peminjaman"> Kembali</a>
	
	<br/>
	<br/>

	<form action="proses_tambah" method="post">
    <table>
		{{ csrf_field() }}
		<tr>
        <td>No Buku</td>
        <td><input type="text" name="No_Buku" required="required"> <br/></td>
        </tr>
        <tr>
        <tr>
        <td>Judul</td>
        <td> <input type="text" name="Judul" required="required"><br/></td>
        </tr>
        <tr>
        <td>Pengarang</td>
        <td> <input type="text" name="Pengarang" required="required"><br/></td>
        </tr>
        <tr>
        <td>Tahun Terbit</td>
        <td> <input type="text" name="Tahun_Terbit" required="required"><br/></td>
        </tr>
        <tr>
        <td>Jenis Buku</td>
        <td> <input type="text" name="Jenis_Buku" required="required"><br/></td>
        </tr>
       
        <td></td>
        <td><input type="submit" value="Simpan Data"></td>
        </tr>
        </table>
	</form>

</body>
</html>