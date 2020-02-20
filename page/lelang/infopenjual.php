<!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
        <h1 class="my-4">Produk</h1>
        <div class="list-group">
          <a href="?page=lelang&perintah=barang" class="list-group-item active">Produk</a>
          <a href="?page=lelang&perintah=penjual" class="list-group-item">Penjual</a>
        </div>
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="card mt-4">
          <div class="card-body">
            <h3 class="card-title">Info Penjual</h3>
            <div class="login">
        <form>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label>Nama Lengkap</label>
      <input type="text" class="form-control" maxlength="25" id="nama_lengkap" placeholder="Nama Lengkap" required>
    </div>
    <div class="form-group col-md-6">
      <label>Username</label>
      <input type="text" class="form-control" maxlength="25" id="Username" placeholder="Username" required>
    </div>
    <div class="form-group col-md-6">
      <label>Password</label>
      <input type="password" class="form-control" maxlength="25" id="Password" placeholder="Password" required>
    </div>
  </div>
  <div class="form-group">
    <label>Telp</label>
    <input type="tel" class="form-control" id="telp" maxlength="13" placeholder="(62) 123456789" required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="city">City</label>
      <select id="city" class="form-control" required="required">
        <option selected>Choose...</option>
        <option>Bogor</option>
        <option>Depok</option>
        <option>Jakarta</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <input type="text" class="form-control-plaintext" id="state" value="Indonesia" readonly>
    </div>
    <div class="form-group col-md-2">
      <label>Zip</label>
      <input type="number" maxlength="5" class="form-control" id="zip" required>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" required="required">
      <label class="form-check-label" for="gridCheck">
        Saya menyetujui syarat dan ketentuan yang berlaku*
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
        </div>
          </div>
        </div>

      </div>
      <!-- /.col-lg-9 -->

    </div>

  </div>
  <!-- /.container -->