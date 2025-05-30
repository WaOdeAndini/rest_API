function searchMovie() {
     $.ajax({
        url: 'http://omdbapi.com',
        type: 'get',
        dataType: 'json',
        data: {
            'apikey' : '7665e20d',
            's' : $('#search-input').val()
        },
        success: function (result) {
            if (result.Response == "True") {
                $('#movie-list').html('');
                let movies = result.Search;

                $.each(movies, function (i, data) {
                    $('#movie-list').append(`
                        <div class="col-md-4">
                        <div class="card mb-3">
                            <img src=${ data.Poster } class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">${data.Title}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">${data.Year}</h6>
                            <a href="#" class="card-link see-detail" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id=${data.imdbID}>See Detail</a>
                        </div>
                    </div>
                </div>
             `);
        });

            $('#search-input').val('');


            }else {
                $('#movie-list').html(`
                        <h1 class="text-center">Movie Not Found!</h1>`)
            }
        }
    });
        

    }

$('#search-button').on('click', function() {
    searchMovie();


});

//untuk bisa menggunakan tombol enter
$('#search-input').on('keyup', function (e) {
    if(e.keyCode === 13) {
        searchMovie();
    }

});

$('#movie-list').on('click', '.see-detail', function() {
    
    $.ajax({
        url: 'http://omdbapi.com',
        type: 'get',
        dataType: 'json',
        data: {
            'apikey' : '7665e20d',
            'i' : $(this).data('id')
        },
        success: function (movie) {
            if (movie.Response === "True") {

                $('.modal-body').html(`
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                            <img src=${movie.Poster} class= "img-fluid">
                            </div>

                            <div class="col-md-8">
                            <ul class="list-group">
                                <li class="list-group-item active" aria-current="true">${movie.Title}</li>
                                <li class="list-group-item">${movie.Released}</li>
                                <li class="list-group-item">${movie.Title}</li>
                                <li class="list-group-item">${movie.Genre}</li>
                                <li class="list-group-item">${movie.Director}</li>
                                <li class="list-group-item">${movie.Actors}</li>
                                </ul>
                            </div>
                        </div>
                    
                    </div>


                `);
            }
        }

    });

});