<div class="main-panel">
<nav class="navbar navbar-transparent navbar-absolute">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">BooKooKoo</a>
</div>
<div class="collapse navbar-collapse">
<ul class="nav navbar-nav navbar-right">
<li>
<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
<i class="material-icons">person</i>
<p class="hidden-lg hidden-md">Admin</p>
</a>
</li>
</ul>
<form class="navbar-form navbar-right" role="search">
<div class="form-group is-empty">
<input type="text" class="form-control" placeholder="Search">
<span class="material-input"></span>
</div>
<button type="submit" class="btn btn-white btn-round btn-just-icon">
<i class="material-icons">search</i><div class="ripple-container"></div>
</button>
</form>
</div>
</div>
</nav>
<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header" data-background-color="green">
<h4 class="title">Tambah Data Buku</h4>
</div>
<div class="card-content">
<form action="#" method="post" enctype="multipart/form-data" >
<div class="row">
<div class="col-md-4">
<div class="form-group label-floating">
<label class="control-label">Kategori</label>
<select class="form-control" name="kategori">
<option value="#" disabled selected></option>
<option value="1">Novel</option>
<option value="2">Bahasa dan Kamus</option>
<option value="3">Agama</option>
<option value="4">Edukasi</option>
</select>
</div>
</div>
<div class="col-md-4">
<div class="form-group label-floating">
<label class="control-label">Judul Buku</label>
<input type="text" class="form-control" name="judul">
</div>
</div>
<div class="col-md-4">
<div class="form-group label-floating">
<label class="control-label">Nama Pengarang</label>
<input type="text" class="form-control" name="pengarang">
</div>
</div>
</div>
<div class="row">
<div class="col-md-3">
<div class="form-group label-floating">
<label class="control-label">Penerbit</label>
<input type="text" class="form-control" name="penerbit">
</div>
</div>
<div class="col-md-3">
<div class="form-group label-floating">
<label class="control-label">Tahun Terbit</label>
<input type="text" class="form-control" name="tahunterbit">
</div>
</div>
<div class="col-md-3">
<div class="form-group label-floating">
<label class="control-label">ISBN</label>
<input type="number" min="0" class="form-control" name="isbn">
</div>
</div>
<div class="col-md-3">
<div class="form-group label-floating">
<label class="control-label">Browse Image</label>
<input type="file" id="inputFile4" name="filefoto" class="form-control">
<div class="input-group">
<input type="text" readonly="" class="form-control">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group label-floating">
<label class="control-label">Sinopsis Buku</label>
<textarea class="form-control" rows="5" name="sinopsis"></textarea>
</div>
</div>
</div>
<button type="submit" class="btn btn-success pull-right" style="margin: 0 20px 20px
0;"><i class="fa fa-save"></i> Simpan</button>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>
<footer class="footer">
<div class="container-fluid">
<p class="copyright pull-right">
&copy; <script>document.write(new Date().getFullYear())</script> Teknik Informatika
Universitas Pasundan.
</p>
</div>
</footer>
</div>
</div>
</div>