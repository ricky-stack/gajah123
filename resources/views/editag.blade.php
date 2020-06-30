<!DOCTYPE html>
<html>
<head>
	<title>Edit  Data</title>
</head>
<body>
 
<link  rel ='Stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css"></link>
	<h3>Edit Data</h3>
 
	<a href="../../anggota"> Kembali</a>
	
	<br/>
	<br/>
 

	
    @foreach($datatamu as $p)
    <form action="{{ route('anggota.edit', $p->Id_Anggota) }}" method="post">
    <table>
		@csrf
        @method('POST')

		<input type="hidden" name="Id_Anggota" value="{{ $p->Id_Anggota }}"> <br/>
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
        <td>Tgl_Lahir</td>
        <td> <input type="text" name="Tgl_Lahir" required="required"><br/></td>
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