<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikaasi Perhitungan Diskon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container col-mt-5">
    </div class="row justify-content-center">
    <div class="col-md-4">
    <h2 class="text-center">Aplikasi Perhitungan Diskon</h2>
    <form method="post" class="border rounded-light p-2">
       <label class="form-label">Harga Barang(Rp)</label>
       <input type="number" name="harga" min="0" step="0,01" class="form-control" placeholder="Masukan Harga Barang"
       autocomplete="off" onkeypress="return event.charCode >=48 && return event.charCode <=57">
       <label class="form-label">Diskon(%)</label>
       <input type="text" maxlegth="3" name="diskon"min="0" step="0,01" class="form-control" placeholder="Masukan Harga diskon(1-100)"
       autocomplete="off" onkeypress="return event.charCode >=48 && return event.charCode <=57">
       <button type="submit" class="btn btn-primary w-100 mt-2" name="hitung">Hitung</button>
       <button type="btn btn-primary w-100 mt-2" onclick>Reset</button>
</form>
<?php
            if(isset($_POST['hitung'])){
              $harga = $_POST['harga'];
               $diskon = $_POST['diskon'];

               if($harga <0){
                echo"<script>alert('harga Tidak Boleh Negatif')</script>";
             }elseif($diskon <0 || $diskon >100){
            echo"<script>alert('Diskon Harus Diantara 1-100!')</script>";
           }else{
             $nilai_$diskon =$harga * ($diskon/100);
            $tota_harga =$harga - $nilai_diskon;?>

            



        
                </div>
            </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js">
            </script>
            
            
        </form>
    
</body>
</html>