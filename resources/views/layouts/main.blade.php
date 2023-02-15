<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title> Light Novel | @yield('title') 
</title>
</head>
<style>
    .main{
        height: 100vh;
}
.sidebar{;
    background-color: #AACB73;
}
.sidebar a{
    text-decoration: none;
    padding: 30px 20px;
    color: #ffffff;
    display:block;
}

.sidebar a:hover{
background-color: #658864;
}

.sidebar a.active{
    background-color: #C9F4AA;
    border-right: solid 4px #ffffff;
}
.books{
  background-image: linear-gradient(to right top, #ff0000, #fe4400, #fd6200, #fb7a02, #f98f1a, #ef8a1e, #e68621, #dc8123, #c76418, #b0480e, #992a07, #810000);}
.card-data{
  border-radius: 5px;
  padding: 20px 50px;
  border: solid;
  color: rgb(0, 0, 0);
}
.card-data i{
  font-size: 50px;
}
.desc{
  font-size: 40px;
}
.count{
  font-size: 30px;
}
.category{
  background-image: linear-gradient(to right top, #00fff0, #00e7e8, #00d0de, #00b8cf, #00a1be, #0096c5, #0089c9, #007ac9, #006de0, #005bf2, #0042fd, #1d00ff);}
  .user{
  background-image: radial-gradient(circle, #d16ba5, #d95cb0, #dd4cbd, #de3ace, #db26e1, #dc1dea, #dc11f3, #db00fd, #e400fc, #ee00fb, #f600f9, #ff00f8);  }
  


</style>
<body>
    <div class="main d-flex flex-column justify-content-between">      
    {{-- navbar --}}
    <nav class="navbar navbar-dark bg-body-tertiary" style="background-color: #CDE990;">
        <div class="container-fluid">
          <a class="navbar-brand bg" href="">Light Novel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>

      <div class="body-main h-100 ">
            <div class="row g-0 h-100">
                <div class="sidebar col-lg-2 p-4 collapse d-lg-block" id="navbarSupportedContent">
                    @if(Auth::user()->roles_id == 1)
                      <a href="/dashboard" @if (request()->route()->uri == 'dashboard') class= "active"
                        @endif class="bi bi-house-gear-fill"> dashboard</a>
                          
                      <a href="/users" @if (request()->route()->uri == 'users') class= "active"
                        @endif class="bi bi-person-circle"> User</a>

                      <a href="/category" @if (request()->route()->uri == 'category') class= "active"
                        @endif class="bi bi-tag-fill"> Category</a>

                      <a href="/books" @if (request()->route()->uri == 'Book') class= "active"
                        @endif class="bi bi-book-fill"> book</a>

                      <a href="/rents" @if (request()->route()->uri == 'rents logs') class= "active"
                        @endif class="bi bi-cart4"> Rents Logs</a>

                      <a href="/logout"  class="bi bi-power"> Logout</a>
                      @else
                      <a href="/profile" class="bi bi-person-circle"> profile</a>
                      <a href="/logout"  class="bi bi-power">Logout</a>

                      @endif
                </div>
                <div class=" col-lg-10 p-5 content clas">
                    @yield('content')
                </div>
            </div>
 </div>
    </div>

    
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>