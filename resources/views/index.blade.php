<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Document</title>
</head>
<body>
  <!-- Section: Contact v.1 -->
<section class="my-5">
  <form action="{{route ('result')}}" method="GET">
    <input name='query' autocomplete="off"    class="search-input"  placeholder="Поиск товара" required > 

</form>   
    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold text-center my-5">Contact us</h2>
    <!-- Section description -->
    <p class="text-center w-responsive mx-auto pb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
      Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam
      eum porro a pariatur veniam.</p>
  
    <!-- Grid row -->
    <div class="row">
  
      <!-- Grid column -->
      <div class="col-lg-5 mb-lg-0 mb-4">
  
        <!-- Form with header -->
        <div class="card">
          <div class="card-body">
            <!-- Header -->
          <form method="POST" action="{{route('addproducts')}}">
            @csrf
            <!-- Body -->
            <div class="md-form">
              <i class="fas fa-user prefix grey-text"></i>
              <input type="text" id="form-name" class="form-control" name='title'>
              <label for="form-name">Your title</label>
            </div>
            <div class="md-form">
              <i class="fas fa-envelope prefix grey-text"></i>
              <input type="text" id="form-email" class="form-control" name="seo_title">
              <label for="form-email">Your seo_title</label>
            </div>
            <div class="md-form">
              <i class="fas fa-tag prefix grey-text"></i>
              <input type="text" id="form-Subject" class="form-control" name="description">
              <label for="form-Subject">description</label>
            </div>
            <div class="text-center">
              <button class="btn btn-light-blue">Submit</button>
            </div>
          </form>
          @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
          </div>
        </div>
        <!-- Form with header -->
  
      </div>
      <!-- Grid column -->
  
    
  
    </div>
    <!-- Grid row -->
  
  </section>
  <!-- Section: Contact v.1 -->


    <script  src="{{ mix('/js/app.js') }}"  ></script>
</body>
</html>