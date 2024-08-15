@extends('masterpk')

@section('banner')
<div class="banner">
  <h1>Pengaturan Akun</h1>
</div>
@endsection

@section('konten')
@foreach($pelamar as $p)
<div class="body">
    <div class="conten">
        <h1>Login Informasi</h1>
        <br>
        <form action="">
          <table>
            <tr>
              <td>
                  <h3><label>Email</label></h3>
                  <input type="email" maxlength="100" size="100" required><br><br>
              </td>
            </tr>
            <tr>
              <td>
                <h3><label>Password</label></h3>
                <input type="text" maxlength="100" size="100" required><br><br>
              </td>
            </tr>
            <tr>
              <td>
                <h3><label>Verifikasi Password</label></h3>
                <h5>(Masukkan password sekali lagi)</h5>
                <input type="text" maxlength="100" size="100" required><br><br>
              </td>
            </tr>
            <tr>
              <td>
                <div class="button">
                <input type="submit" name="simpan" value="SIMPAN" onclick="myFunction()">
                </div>
              </td>
            </tr>
          </table>
        </form>
    </div>
</div>
<script language="javascript">
    function myFunction() {
      if (confirm("Klik OK, jika anda yakin untuk mengubah data. ")) {
        window.location="dashboard real.php";
      } else {
        window.location="pengaturan.php";
      }
    }
</script>
@endforeach
@endsection