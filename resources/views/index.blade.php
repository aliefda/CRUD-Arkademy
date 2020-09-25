<!DOCTYPE html>
<html>
<head>
	<title>CRUD Arkademy</title>
</head>
<body>
 
	<h3>Data Produk</h3>
 
	<a href="/produk/tambah"> + Tambah produk</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Keterangan</th>
			<th>Harga</th>
			<th>Jumlah</th>
			<th>Opsi</th>
		</tr>
		@foreach($produk as $p)
		<tr>
			<td>{{ $p->namaProduk}}</td>
			<td>{{ $p->keterangan }}</td>
			<td>{{ $p->harga }}</td>
			<td>{{ $p->jumlah }}</td>
			<td>
				<a href="/produk/edit/{{ $p->id }}">Edit</a>
				|
				<a href="/produk/hapus/{{ $p->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>