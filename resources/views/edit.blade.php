<!DOCTYPE html>
<html>
<head>
	<title>Edit  Data</title>
</head>
<body>
 
<link  rel ='Stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css"></link>
	<h3>Edit Data</h3>
 
	<a href="../../peminjaman"> Kembali</a>
	
	<br/>
	<br/>
 

	
    @foreach($datatamu as $p)
    <form action="{{ route('buku.edit', $p->No_Buku) }}" method="post">
    <table>
		@csrf
        @method('POST')

		<input type="hidden" name="No_Buku" value="{{ $p->No_Buku }}"> <br/>
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

        <tr>
        <td></td>
        <td><input type="submit" value="Simpan Data"></td>
        </tr>
    </table>
    @endforeach
	</form>
	
		
 
</body>
</html>