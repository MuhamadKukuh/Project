<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1 id="apa">Nama</h1>
    
    <div class="row">
      <div class="card">
        <div class="card-body">
          <input type="number" name="" id="angka1" class="form-control">
          <input type="number" name="" id="angka2" class="form-control">
        </div>
            <button id="final" type="submit" class="btn btn-primary">Kirim</button>
            <button id="tampil" class="btn btn-danger mt-3"  type="submit" disabled="">Selesai</button>
            <button id="coba" type="submit" class="btn btn-primary">Kirim</button>
      </div>
    </div>

    <div class="row mt-3">
      <div class="card">
        <div class="card-body">
          <input type="number" name="" id="angka3" class="form-control">
          <input type="number" name="" id="angka4" class="form-control">
        </div>
        <div>
            <button id="tambah" type="submit" class="btn btn-primary mt-2">+</button>
            <button id="kali" type="submit" class="btn btn-primary mt-2">x</button>
            <button id="kurang" type="submit" class="btn btn-primary mt-2">-</button>
            <button id="bagi" type="submit" class="btn btn-primary mt-2">:</button>
            <button id="hasil" class="btn btn-danger mt-3"  type="submit" disabled="">Selesai</button>
        </div>  
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script>
      $('#kali').on('click', function() {
        let a = document.getElementById('angka3').value;
        let b = document.getElementById('angka4').value;

        let hasils = a * b;

        $('#hasil').html(hasils)
      })
      $('#tambah').on('click', function() {
        let a = document.getElementById('angka3').value;
        let b = document.getElementById('angka4').value;

        let hasils = parseInt(a) + parseInt(b);

        $('#hasil').html(hasils)
      })
      $('#bagi').on('click', function() {
        let a = document.getElementById('angka3').value;
        let b = document.getElementById('angka4').value;

        let hasils = a / b;

        $('#hasil').html(hasils)
      })
      $('#kurang').on('click', function() {
        let a = document.getElementById('angka3').value;
        let b = document.getElementById('angka4').value;

        let hasils = a - b;

        $('#hasil').html(hasils)
      })
    </script>

    <script >
      $('#coba').on('click', function() {
        alert('uhuy');
        $('#coba').addClass('disabled').html('upload..')
        // let apa = prompt("apa", "");
        let angka1 = document.getElementById('angka1').value;
        let angka2 = document.getElementById('angka2').value;
        let final  = parseInt(angka1) * parseInt(angka2);
        $('#final').addClass('disabled').html('Sudah di inputkan');
        $('#tampil').html(final);
      })
    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- my script -->
    <script type="" src="script.js"></script>
  </body>
</html>