<!DOCTYPE html>
<html>
<head>
	<title>Data  Buku</title>
    <h1>Data Table Buku</h1>
	<div class="links">
                    <a href="peminjaman">Buku</a>
                    <a href="anggota">Anggota</a>
                    <a href="pinjam">Peminjaman</a>
                
                
                </div>
                <br>
<link  rel ='Stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css"></link>
<a href="peminjaman/tambah">Add New</a>
</head>
<body>
	<br/>
	<br/>
    
	<table border="1">
		<tr>
            <th>No Buku</th>
			<th>Judul</th>
			<th>Pengarang</th>
			<th>Tahun Terbit</th>
            <th>Jenis Buku</th>
			<th>Opsi</th>
		</tr>
		@foreach($datatamu as $p)
		<tr>
			<td>{{ $p->No_Buku }}</td>
			<td>{{ $p->Judul }}</td>
            <td>{{ $p->Pengarang }}</td>
			<td>{{ $p->Tahun_Terbit }}</td>
            <td>{{ $p->Jenis_Buku }}</td>
			<td>
				<a href="peminjaman/edit/{{ $p->No_Buku }}">Edit</a>
				|
				<a href="peminjaman/hapus/{{ $p->No_Buku }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>