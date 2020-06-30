<!DOCTYPE html>
<html>
<head>
	<title>Data  Anggota</title>
    <h1>Data Table Anggota</h1>
	<div class="links">
                    <a href="peminjaman">Buku</a>
                    <a href="anggota">Anggota</a>
                    <a href="pinjam">Peminjaman</a>
                
                
                </div>
                <br>
<link  rel ='Stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css"></link>
<a href="anggota/tambahag">Add New</a>
</head>
<body>
	
	<br/>
	<br/>
    
	<table border="1">
		<tr>
            <th>Id Anggota</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>No Telp</th>
            <th>Tanggal Lahir</th>
			<th>Opsi</th>
		</tr>
		@foreach($datatamu as $p)
		<tr>
			<td>{{ $p->Id_Anggota }}</td>
			<td>{{ $p->Nama }}</td>
            <td>{{ $p->Alamat }}</td>
			<td>{{ $p->No_Telp }}</td>
            <td>{{ $p->Tgl_Lahir }}</td>
			<td>
				<a href="anggota/editag/{{ $p->Id_Anggota }}">Edit</a>
				|
				<a href="anggota/hapus2/{{ $p->Id_Anggota }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>