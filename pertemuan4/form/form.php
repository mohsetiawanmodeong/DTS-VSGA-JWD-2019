<!DOCTYPE html>
<html lang="en">

<head>
  <title>Form dengan Bootstrap</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>

  <div class="container">
    <p style="font-size:40px;">DIGITAL TALENT :| Form dengan Bootstrap</p>
    <form action="/action_page.php">
      <div class="form-group">
        <label for="name">Nama Anda :</label>
        <input type="name" class="form-control" id="name" placeholder="" name="name">
      </div>
      <div class="form-group">
        <label for="address">Alamat Anda :</label>
        <textarea type="address" class="form-control" id="address"></textarea>
      </div>
      <div class="form-group">
        <label for="jk">Jenis Kelamin :</label>
        <select class="form-control">
          <option value="Pria">Pria</option>
          <option value="Wanita">Wanita</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
  </div>

</body>

</html>