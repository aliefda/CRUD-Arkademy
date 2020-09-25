<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
 
	<h3>Produk</h3>
 
	<a href="/produk"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/produk/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Keterangan <input type="text" name="keterangan" required="required"> <br/>
		Harga <input type="text" name="harga" required="required"> <br/>
		Jumlah <input type="text" name="jumlah" required="required"></input> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>