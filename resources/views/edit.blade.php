<!DOCTYPE html>
<html>
<head>
	<title>CRUD Arkademy</title>
</head>
<body>
 
	<h3>Edit Produk</h3>
 
	<a href="/produk"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($produk as $p)
	<form action="/produk/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->namaProduk }}"> <br/>
		Keterangan <input type="text" required="required" name="keterangan" value="{{ $p->keterangan }}"> <br/>
		Harga <input type="text" required="required" name="harga" value="{{ $p->harga }}"> <br/>
		Jumlah <textarea required="required" name="jumlah">{{ $p->jumlah }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>