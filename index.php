<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container-md ">
      <a class="navbar-brand" href="#"><b>Rumuz Box</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-sm mt-3">

    <div class="row">
      <div class="col-sm-6 mt-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Luas Persegi</h5>
            <p class="card-text">Rumus untuk mencari Luas Persegi <b>L = s x s</b></p>
            <p>Source : <a href="https://kids.grid.id/read/472572992/rumus-mudah-menghitung-luas-bangun-datar-persegi-persegi-panjang-jajar-genjang?page=all#:~:text=Rumus%20luas%20persegi%20adalah%20L,luas%20dan%20s%20merupakan%20sisi.">https://www.kids.grid.id</a></p>
            
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Contoh
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Luas Persegi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <?php
                    define("s",10);
                    $luas_persegi = s * s;                    
                    ?>
                    <p>s = 10 <br>
                      Luas Persegi = s x s <br>
                      Luas Persegi = 10 x 10 <br>
                    </p>
                    <p>Luas Persegi =  <?= $luas_persegi; ?> </p> 

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>                    
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="col-sm-6 mt-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Luas Segitiga</h5>
            <p class="card-text">Rumus untuk mencari Luas Segitiga <b>L = ½ a × t</b></p>
            <p>Source : <a href="https://www.suara.com/tekno/2021/05/26/103856/rumus-segitiga-luas-keliling-dan-contoh-soal?page=all#:~:text=Untuk%20mencari%20luas%20segitiga%20adalah,panjang%20dari%20masing%2Dmasing%20garisnya.&text=Suatu%20segitiga%20sama%20sisi%20memiliki,keliling%20dan%20luas%20segitiga%20tersebut!">https://www.suara.com</a></p>
            
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
              Contoh
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Luas Segitiga</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                    <?php
                    define("setengah", 0.5);
                    $alas = 20;
                    $tinggi = 10;
                    $luas_segitiga = setengah * $alas * $tinggi;                    
                    ?>
                    <p>alas = 20 <br>
                      tinggi = 10 <br>
                      Luas Segitiga = ½ a × t<br>
                      Luas Segitiga = ½ 20 × 10<br>
                    </p>
                    <p>Luas Segitiga =  <?= $luas_segitiga; ?> </p> 

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>                    
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="col-sm-6 mt-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Luas Trapesium</h5>
            <p class="card-text">Rumus untuk mencari Luas Trapesium <b>L = ½ jumlah panjang sisi sejajar × t</b></p>
            <p>Source : <a href="https://www.kelaspintar.id/blog/edutech/rumus-luas-trapesium-dan-beberapa-contoh-soal-7882/">https://www.kelaspintar.id</a></p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
              Contoh
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Luas Trapesium</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <?php
                    
                    define("tinggi", 6);
                    $sisi_a = 20;                    
                    $sisi_b = 12;                    
                    $luas_trapesium = setengah * ($sisi_a + $sisi_b) * tinggi; 
                    ?>
                    <p>sisi a = 20 <br>
                      sisi b = 12 <br>
                      tinggi = 6 <br>
                      Luas Trapesium = ½ jumlah panjang sisi sejajar × t<br>
                      Luas Trapesium = ½ (sisi a + sisi b) × t<br>
                      Luas Trapesium = ½ (20 + 12) × 6<br>
                      Luas Trapesium = ½ 32 × 6<br>
                    </p>
                    <p>Luas Trapesium =  <?= $luas_trapesium; ?> </p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>                    
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="col-sm-6 mt-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Luas Permukaan Tabung</h5>
            <p class="card-text">Rumus untuk mencari Luas Permukaan Lingkaran <b>L = 2 πr (r+t)</b></p>
            <p>Source : <a href="https://www.kompas.com/skola/read/2021/03/01/184818869/cara-menghitung-luas-permukaan-tabung?page=all">https://www.kompas.com</a></p>
            
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
              Contoh
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Luas Permukaan Tabung</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <?php
                   define("PHI", 3.14);
                   $r = 14;
                   $t = 35;                    
                   $luas = 2 * PHI * $r *($r+$t);
                   ?>
                   <p>r = 14 <br>                      
                    π = 3.14 <br>
                    t = 35                      
                      Luas Permukaan Tabung = 2 πr (r+t)<br>
                      Luas Permukaan Tabung = 2 3.14 x 14 (14+35)<br>                                            
                    </p>
                    <p>Luas Permukaan Tabung =  <?= $luas; ?> </p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>                    
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="col-sm-6 mt-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Luas Permukaan Lingkaran</h5>
            <p class="card-text">Rumus untuk mencari Luas Permukaan Lingkaran <b>L = 2 x π r²</b></p>
            <p>Source : <a href="https://www.kompas.com/skola/read/2021/03/01/184818869/cara-menghitung-luas-permukaan-tabung?page=all">https://www.kompas.com</a></p>
            
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal4">
              Contoh
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Luas Permukaan Lingkaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                   <?php                   
                   $r = 14;                    
                   $luas = 2 * PHI * $r * $r; 
                   ?>
                   <p>r = 14 <br>                      
                    π = 3.14 <br>                      
                      Luas Permukaan Lingkaran = 2 x π r²<br>
                      Luas Permukaan Lingkaran = 2 x 3.14 x 14²<br>                                            
                    </p>
                    <p>Luas Permukaan Lingkaran =  <?= $luas; ?> </p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>                    
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>



    </div>

  </div>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>