  @extends('master')
  @section('content')
    <!--suggestion section-->
    <section id="answers">
      <div class="projects container">
        <div class="all-projects">
          <div class="project-item">
            <div class="project-info">
              <h1><div id="answer">Movie <span>Title</span> </div></h1>
                <h2><span>Story</span>Line : </h2>
                <p style="text-align: justify;">Story Line........................................................................................................ ................</p>
            </div>
      <div class="project-img" id="movie-container" data-movie="{{ $movie_title }}">
        <img src=" {{asset('img/m4u.jpg') }}" alt="img">
      </div>
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
                  data: {t: 'Aquaman', apikey: '3b6d2ce0'},
                  dataType: 'json',
                  success: function (msg) {
                  console.log(msg);
              }
              });
          </script>
      @endpush
  @endsection
