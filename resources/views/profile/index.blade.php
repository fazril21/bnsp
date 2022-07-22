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
                    <div class="dropdown pb-4">
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
            <div class="card" style="width: 90rem ; height :50rem" >
                <div class="card-header">
                    
                </div>
                <div class="card-body " >
                    <form action="POST" action="" enctype=""></form>
                    @csrf
                    <div>
                        <div>   
                            <section class="">
                            <div>
                                <img src="img/azil.jpeg"  width="100" class="rounded-circle img-thumbnail">                                
                                Fazril Fachrezi Ramdani <a href="#"> <img src="img/edit.png" alt="" width="20" class=""> </a>
                                {{ Auth::user()->name }} <a href="#"><img src="img/edit.png" alt="" width="20" class=""> </a>
                            </div>
                             </section>
                             <div>
                                <h3>bio</h3>    
                                <textarea name="text" id="" cols="190" rows="5" placeholder="Apa yang anda pikirkan"></textarea>
                             </div>
                             <button type="submit" style="margin-left: 95%">SAVE</button>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
</div>
</body>


@endsection
