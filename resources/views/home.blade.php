@extends('layouts.app')

@section('content')
<head>

</head>
<body>
<div class="container">
    </div>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 ">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <a id="navbarDropdown" class=" " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img src="img/akun.png" alt="" width="20" class=""> {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                    </a>
                    <hr>
                    {{-- sidebar --}}
                    <div class="dropdown pb-4 " >
                        <a href="/home" class="nav-link px-0 align-middle">
                            <span class="ms-1 d-none d-sm-inline">
                                <img src="img/home.png" alt="" width="20" class=""> 
                                HOME
                            </span> 
                        </a>
                        <br>
                        <a href="/profile" class="nav-link px-0 align-middle">
                            <span class="ms-1 d-none d-sm-inline">
                                <img src="img/akun.png" alt="" width="20" class="">
                                PROFILE
                            </span> 
                        </a>
                        <br>
                        <a class="nav-link px-0 align-middle" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <img src="img/logout.png" alt="" width="20" class="">  {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                        </form>
                    </div>
                </div>
            </div>
            {{-- profile --}}
            <div class="card" style="width: 90rem ; height :100rem" >
                <div class="card-header"><center>
                    <section class="jumbotron text-center">
                        <img src="img/azil.jpeg"  width="100" class="rounded-circle img-thumbnail">
                        <h1 >Fazril Fachrezi Ramdani</h1>
                        {{-- auth untuk memanggila username yang login --}}
                        <p class="lead">{{ Auth::user()->name }}</p>
                        <p>BIO SAYA</p>
                     </section>
                </div>
                <div class="card-body " >
                    <form action="POST" action="" enctype=""></form>
                    @csrf
                    <div>
                        <div>   
                            <textarea name="text" id="" cols="190" rows="5" placeholder="Apa yang anda pikirkan"></textarea>
                            <a href="#"><img src="img/galerry.png"  alt="" style="width: 2%"></a>
                            <a href="#"><img src="img/file.png"  alt="" style="width: 2%"></a>
                            <a href="{{'posting'}}">Posting</a>
                            
                        </div>
                    </div>
                    {{-- Postingan --}}
                    <div class="card" style="width: 70rem; height :10rem">
                        <div class="card-body">   
                            <img src="img/azil.jpeg"  width="50" class="rounded-circle img-thumbnail">                                
                            <a> Fazril Fachrezi Ramdani </a> 
                            <p >Some quick example text to build on the c.</p>
                        </div>
                    </div>
                    <br>
                    <div class="card" style="width: 70rem; height :10rem">
                        <div class="card-body">   
                            <img src="img/azil.jpeg"  width="50" class="rounded-circle img-thumbnail">                                
                            <a> Fazril Fachrezi Ramdani </a> 
                            <p >Some quick example text to build on the c.</p>
                        </div>
                    </div>
                    <br>
                    <div class="card" style="width: 70rem; height :10rem">
                        <div class="card-body">   
                            <img src="img/azil.jpeg"  width="50" class="rounded-circle img-thumbnail">                                
                            <a> Fazril Fachrezi Ramdani </a> 
                            <p >Some quick example text to build on the c.</p>
                        </div>
                    </div>
                      
                    <div>
                        <section class="">
                            
                        </section>
                       
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
</div>
</body>


@endsection
