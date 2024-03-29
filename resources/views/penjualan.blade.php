<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    @include('layout.nav')
    <div style="display:flex;">
<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 200px; left:10%; height:90vh;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi me-2" width="40" height="40"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-6" style="left:10%;">Kasir-Men</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="home" class="nav-link text-white" aria-current="page">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use>
          <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
  <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
        </svg>
          Home
          </a>
      </li>
      <li>
        <a href="penjualan" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use>
          <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
  <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2z"/>
  </svg>
        </svg>
          Penjualan
        </a>
      </li>
      <li>
        <a href="produk" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use>
          <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0M8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5z"/>
        </svg>
          Produk
        </a>
      </li>
      <li>
        <a href="pelanggan" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use>
          <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
        </svg>
        pelanggan
        </a>
      </li>
    </ul>
    <hr>
    <a href="customers" class="nav-link text-white">
     <svg class="bi me-2" width="30" height="16"><use xlink:href="#people-circle"></use>
 <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
   <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
   </svg>
     Log out
   </a>
   </div>
   <div>
    <br>
    <h1 style="text-align: center">PENJUALAN</h1>
    <br>
    <div class="container">
        <form action={{ url('/tambah_penjualan') }} method="POST">
            @method('POST')
            @csrf
            <label class="row row-cols-lg-auto g-3 align-items-center"
                style="  display: grid; grid-template-columns: auto auto auto; gap: 10px 10px;">

                <div class="col-12">
                    <select class="form-select"  name="produk">
                        <option selected>Pilih Produk...</option>
                        @foreach ($produk as $produk)
                            <option value="{{$produk->produkid}}" >{{ $produk->namaproduk }}
                           </option>
                        @endforeach
                    </select>
                </div>
                <input type="hidden" name="penjualanid" value={{ $penjualanid }}>
                <div class="col-12">
                    <label class="visually-hidden" for="inlineFormInputGroupUsername">Jumlah Produk</label>
                    <div class="input-group">
                        <div class="form-outline" style="width: 22rem;">
                            <input value="qty" min="1" type="number" id="typeNumber" class="form-control"
                                placeholder="qty" name="qty" />
                        </div>
                    </div>
                </div>
                <select class="form-select" name ="pelanggan" >
                    <option selected>Nama Pelanggan</option>
                    @foreach ($pelanggan as $pelanggan)
                        <option value="{{$pelanggan->pelangganid}}" >{{ $pelanggan->namapelanggan }}</option>
                    @endforeach
                </select>

                <div class="col-12">
                    <button class="btn btn-outline-dark">Tambah</button>
                </div>
            </label>
        </form>
    <br>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-bordered" style="width:80%">
                <thead>
                    <tr>
                        <th scope="col" style="text-align: center; width:5%">no</th>
                        <th scope="col" style="text-align: center; width:5%">Nama Produk</th>
                        <th scope="col" style="text-align: center; width:5%">Harga</th>
                        <th scope="col" style="text-align: center;width:5%">Qty</th>
                        <th scope="col" style="text-align: center; width:5%">Sub Total</th>
                    </tr>
                </thead>
                <?php $no = 1; 
                      $totalharga = 0?>
                <tbody>
                    @foreach($detailpenjualan as $detailpenjualan   )
                    <tr>
                        <th>{{$no++}}</th>
                        <th>{{$detailpenjualan->namaproduk}}</th>
                        <th>{{$detailpenjualan->harga}}</th>
                        <th>{{$detailpenjualan->jumlahproduk}}</th>
                        <th>{{$detailpenjualan->Subtotal}}</th>
                        <?php  $totalharga = $totalharga + $detailpenjualan->Subtotal ?>
                    </tr>
                    @endforeach
                </tbody>

            </table>
            <div class="container">
            <div class="checkout">
            <h1> Total Harga : {{number_format($totalharga,0,',','.')}}</h1>
   <form action="{{url ('checkout')}}" method="POST">
   @method('POST')
   @csrf
    <input type="hidden" name="penjualanid" value="{{$penjualanid}}">   
    <input type="hidden" name="totalharga" value="{{$totalharga}}">   

    <input style="btn btn-outline-primary" type="submit" name="submit" value="checkout">
    </form>   
    </form>
    </div>
    </div>
    </div>

</body>

</html>