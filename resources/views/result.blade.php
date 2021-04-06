  @extends('master')
  @section('content')
    <!--suggestion section-->
    <section id="answers">
      <div class="projects container">
        <div class="all-projects">
          <div class="project-item">
            <div class="project-info">
            @isset($movie_title)
            <h1><div id="answer"> </div></h1>
            <h2>General<span> Info</span> :</h2>
            <p style="font-size: 1.1rem;"> <span id="rated"></span>  | <span id="runtime"></span>  | <span id="genre"></span>  | <span id="released"></span> </p>
                <h2><span>Story</span>Line : </h2>
              <p id="plot">
                </p><br>
              <div class="Rating-info">
              <img src="./img/imdb.png" alt="img">
                <p id="ratings" ></p>
            </div>
              <a  type="button" onclick="window.history.back()" id="Submit" class="buttonT">Back</a>
              <a href="#" type="button" id="movie_link" class="buttonimdb">IMDb</a>
          </div>
          <div class="project-img" id="movie-container" data-movie="{{ $movie_title }}">
              <img id="poster" src="" alt="img">
          </div>
          @else
              No Result Found
                  <a  type="button" onclick="window.history.back()" id="Submit" class="buttonT">Back</a>
          @endisset

          </div>
        </div>
      </div>
    </section>
    <!-- end suggestion section-->
      @push('js')
          <script>

              var movie_title =  $('#movie-container').data('movie');
              // ajax request
              $.ajax({
                  type: 'GET',
                  url: 'http://www.omdbapi.com/',
                  data: {t: movie_title, apikey: '3b6d2ce0'},
                  dataType: 'json',
                  success: function (result) {
                  console.log(result);
                      $('#answer').html(result.Title);
                      $('#plot').html(result.Plot);
                      $('#genre').html(result.Genre);
                      $('#released').html(result.Released);
                      $('#runtime').html(result.Runtime);
                      $('#rated').html(result.Rated);
                      $('#ratings').html(result.Ratings[0].Value);
                      $('#poster').attr('src', result.Poster);
                      $('#movie_link').attr('href', `https://www.imdb.com/title/${result.imdbID}/`);



              }
              });
          </script>
      @endpush
  @endsection
