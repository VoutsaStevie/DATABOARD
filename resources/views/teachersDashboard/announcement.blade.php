@extends('layouts.studentDashboard')

@section('content')
        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Welcome to Announcement Board!</h1>
                    <p class="lead mb-0">Watch out for all new announcement</p>
                </div>
            </div>
        </header>
        <div class="container">
            <!-- Search widget-->
            <div class="card">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                        <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                    </div>
                </div>
            </div>
            <!-- Pagination-->
        </div>
        <!-- Page content-->
        <div class="container">
                <!-- Blog entries-->
                <div class="container">
                   <!-- Nav thing -->
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item"><a class="page-link" href="/newer_posts">Newer</a></li>
                            <li class="page-item"><a class="page-link" href="/older_posts">Older</a></li>
                        </ul>
                    </nav>
                    <!-- Nested row for non-featured blog posts-->
                    <div class="container d-flex flex-row flex-wrap">

                            <!-- Blog post-->
                            @foreach ( $infos as $info )
                            <div style="width: 367px; overflow:hidde" class="card m-4">
                                <a href="#!"><img style="width: 300px; height:190px" class="card-img-top" src="https://resources.workable.com/wp-content/uploads/2017/03/Recruiting-via-text-message.png" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">{{$info -> created_at}}</div>
                                    <h2 class="card-title h4">{{$info -> title}}</h2>
                                    <p style="width: 240px; height:21px; overflow:hidden" class="card-text">{{$info -> content}}</p>
                                    <a class="btn btn-primary" href="/info/{{$info -> id}}">Read more →</a>
                                </div>
                            </div>
                            @endforeach

                    </div>

                </div>
                <!-- Side widgets-->

        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
   @endsection
