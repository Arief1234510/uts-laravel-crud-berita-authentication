<h2>Tambah User</h2>

<form action="{{ route('user.store') }}" method="POST">
@csrf

<div>
<label>Nama</label>
<input type="text" name="name">
</div>

<div>
<label>Email</label>
<input type="email" name="email">
</div>

<div>
<label>Password</label>
<input type="password" name="password">
</div>

<button type="submit">Simpan</button>

</form>