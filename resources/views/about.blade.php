@extends('basicLayout')

@section('nav')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Hillel HW</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home')  }}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about')  }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('services')  }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contacts')  }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@endsection

@section('content')

    <div class="col-md-8">

        <h1 class="my-4">About us</h1>

        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab dicta eos provident sit veritatis. Amet animi autem blanditiis deleniti doloribus ducimus ea eaque earum eligendi enim eos esse est, exercitationem fugit harum nam necessitatibus obcaecati officiis, omnis optio perferendis quae quo, ullam vel voluptate! Amet assumenda at aut autem blanditiis corporis dignissimos dolore eum explicabo fugiat, illum magnam nisi nostrum omnis praesentium quam quas quasi quos ratione rerum sed sit suscipit! Commodi debitis dolorem dolorum, enim eveniet fugit ipsa, magnam minima nulla provident, quam quia quibusdam quod soluta tempore temporibus vel! Animi debitis inventore mollitia necessitatibus, nobis unde voluptatum? Beatae cum esse fugiat minima quia quibusdam reiciendis repellendus veritatis voluptates? Error illo quos repellat sapiente suscipit tempore voluptatum. Atque aut dolorem doloribus eum eveniet necessitatibus nostrum perferendis porro, possimus quia quo vel, voluptas. Accusamus aliquid corporis cupiditate ea expedita inventore magni officiis quam ullam voluptatem! Consequuntur mollitia possimus quae vitae?</h3>
        <br>


    </div>
@endsection

@section('sideWigets')
    <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
                </div>
            </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#">Web Design</a>
                            </li>
                            <li>
                                <a href="#">HTML</a>
                            </li>
                            <li>
                                <a href="#">Freebies</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#">JavaScript</a>
                            </li>
                            <li>
                                <a href="#">CSS</a>
                            </li>
                            <li>
                                <a href="#">Tutorials</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('footer')
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Kirill Osipenko 2018</p>
        </div>
        <!-- /.container -->
    </footer>
@endsection

