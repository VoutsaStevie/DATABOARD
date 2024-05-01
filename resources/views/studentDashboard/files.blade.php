@extends('layouts.studentDashboard')

@section('content')
        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">All Files</h1>
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
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item"><a class="page-link" href="/newer_posts">Newer</a></li>
                            <li class="page-item"><a class="page-link" href="/older_posts">Older</a></li>
                        </ul>
                    </nav>
                    <!-- Nested row for non-featured blog posts-->
                    <div class="container d-flex flex-row flex-wrap">

                            <!-- Blog post-->
                            @foreach ( $files as $file )
                        <a href="/studentDashboard/files/{{$file-> id}}">
                            <div style="width: 300px;"  class="card m-4">
                                <img style="width: 300px;" class="card-img-top" src="https://resources.workable.com/wp-content/uploads/2017/03/Recruiting-via-text-message.png" alt="..." />
                                <div class="card-body article" style="text-align: center">
                                    <div class="small text-muted">{{$file -> created_at}}</div>
                                    <div class="author-box-job">
                                        <h2 class="card-title h4 title">{{$file -> title}}</h2>
                                    </div>
                                </div>
                            </div>
                        </a>
                            @endforeach

                    </div>

                </div>
                <!-- Side widgets-->

        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
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
                    var title = $(this).find('.author-box-job h2').text().toLowerCase();
                    if (title.indexOf(searchText) === -1) {
                        $(this).remove(); // Enlève l'élément non désiré
                    }
                });
                // Supprimer les espaces vides
                $('.section-body .row').each(function() {
                    $(this).find('.col-12').each(function() {
                        if (!$(this).children().length) {
                            $(this).remove();
                        }
                    });
                });
            });
        });

        </script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
   @endsection
