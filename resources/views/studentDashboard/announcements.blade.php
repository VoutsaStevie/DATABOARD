@extends('layouts.studentDashboard')

@section('content')
        <!-- Page header with logo and tagline-->
        <header class="py-5 mb-4 bg-light border-bottom">
            <div class="container">
                <div class="my-5 text-center">
                    <h1 class="fw-bolder">Welcome to Announcement Board!</h1>
                    <p class="mb-0 lead">Watch out for all new announcements</p>
                </div>
            </div>
        </header>
        <div class="container">
            <!-- Search widget-->
            <div class="card">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" id="searchInput" />
                        <button class="btn btn-primary" id="searchButton" type="submit">Go!</button>
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
                        <ul class="my-4 pagination justify-content-center">
                            <li class="page-item"><a class="page-link" href="/newer_posts">Newer</a></li>
                            <li class="page-item"><a class="page-link" href="/older_posts">Older</a></li>
                        </ul>
                    </nav>
                    <!-- Nested row for non-featured blog posts-->
                    <div class="container flex-row flex-wrap d-flex">

                            <!-- Blog post-->
                            @foreach ( $infos as $info )
                            <div style="width: 300px; overflow:hidden" class="m-4 card article">
                                <img style="width: 300px; height:190px" class="card-img-top" src="{{asset('images/img20.jpg')}}" alt="..." />
                                <div class="card-body" style="text-align: center">
                                    <div class="small text-muted">{{$info -> created_at}}</div>
                                    <div class="author-box-job">
                                        <h2 class="card-title h4 title">{{$info -> title}}</h2>
                                    </div>
                                    <div class="author-box-job">
                                        <p style="width: 240px; height:21px; overflow:hidden" class="card-text content">{{$info -> description}}</p>
                                    </div>
                                    <a class="btn btn-primary" href="/studentDashboard/announcements/{{$info-> id}}" style="background-color: #007bff; color: white;">Details</a>
                                </div>
                            </div>
                            @endforeach
                    </div>
                </div>
        </div>
        <!-- Footer-->
        <footer class="py-5" style="background-color: #FFBC3B; color: white;">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#searchButton').on('click', function(event) {
                    event.preventDefault(); // Empêche le formulaire de se soumettre
                    var searchText = $('#searchInput').val().toLowerCase();
                    var $articles = $('.article');
                    $articles.each(function() {
                        var title = $(this).find('.title').text().toLowerCase(); // Modifier la sélection pour cibler la classe du titre
                        if (title.indexOf(searchText) === -1) {
                            $(this).hide(); // Masquer l'article s'il ne correspond pas
                        } else {
                            $(this).show(); // Afficher l'article s'il correspond
                        }
                    });
                });
            });
        </script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
   @endsection
