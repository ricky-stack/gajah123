<!DOCTYPE html>
<html>
<head>
	<title>Data  Peminjaman</title>
    <h1>Data Table Peminjaman</h1>
    <div class="links">
                    <a href="peminjaman">Buku</a>
                    <a href="anggota">Anggota</a>
                    <a href="pinjam">Peminjaman</a>
                
                
                </div>
                <br>
<link  rel ='Stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css"></link>
<a href="pinjam/tambahpj">Add New</a>
</head>
<body>

	<br/>
	<br/>
    
	<table border="1">
		<tr>
            <th>No Pinjam</th>
			<th>Id Angota</th>
			<th>No Buku</th>
			<th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
			
		</tr>
		@foreach($datatamu as $p)
		<tr>
			<td>{{ $p->No_Pinjam }}</td>
			<td>{{ $p->Id_Anggota }}</td>
            <td>{{ $p->No_Buku }}</td>
			<td>{{ $p->Tgl_Pinjam }}</td>
            <td>{{ $p->Tgl_Kembali }}</td>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>