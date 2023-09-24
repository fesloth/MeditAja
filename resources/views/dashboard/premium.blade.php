<!DOCTYPE html>
<html lang="en" class="bg-white scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>{{ $title }}</title>
  @vite('resources/css/app.css')
</head>
<body>
  <div class="container">
    <div class="navbar bg-base-100 shadow-xl">
      <div class="flex-1 pl-5">
        <a class="btn btn-ghost normal-case text-xl">Paket Premium <i class="fa-solid fa-store"></i></a>
      </div>
      <div class="flex-none">
        <div class="dropdown dropdown-end pr-5">
          <div class="flex items-stretch">
            <a href="/" class="btn btn-ghost rounded-btn"><i class="fa-solid fa-angle-left fa-rotate-180"></i>Back</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="cards-container flex mt-36 mx-32">
    <div class="card w-96 bg-base-100 mx-4 shadow-xl">
      <div class="card-body items-center text-center m-10">
        <h2 class="card-title">Beli Paket Tahunan!</h2>
        <p>Rp. 300.000,00-</p>
        <div class="card-actions">
          <button class="btn btn-primary">Buy Now</button>
        </div>
      </div>
    </div>
    <div class="card w-96 bg-base-100 mx-4 shadow-xl">
      <div class="card-body items-center text-center m-10">
        <h2 class="card-title">Beli Paket Bulanan!</h2>
        <p>Rp. 50.000,00-</p>
        <div class="card-actions">
          <button class="btn btn-primary">Buy Now</button>
        </div>
      </div>
    </div>
    <div class="card w-96 bg-base-100 mx-4 shadow-xl">
      <div class="card-body items-center text-center m-10">
        <h2 class="card-title">Beli Paket Mingguan!</h2>
        <p>Rp. 20.000,00-</p>
        <div class="card-actions">
          <button class="btn btn-primary">Buy Now</button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
