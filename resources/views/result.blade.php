  @extends('master')
  @section('content')
    <!--suggestion section-->
    <section id="answers">
      <div class="projects container">
        <div class="all-projects">
          <div class="project-item">
            <div class="project-info">
            <h1><div id="answer">The Swords<span>man</span> </div></h1>
            <h2>General<span> Info</span> :</h2>
            <p style="font-size: 1.1rem;">TV-14 | 1h 40min | Action, Drama, History | 23 September 2020 (South Korea)</p>
                <h2><span>Story</span>Line : </h2>
              <p>"Three different swordsmen meet each other for their own reasons." Tae Yul, a swordsman in his thirties goes out to find his only daughter after losing one of his eyes. Min Seung Ho, the Joseon Dynasty's best swordsman chooses an ordinary simple life after perceiving the transient nature of power. Gurutai, the best swordsman in Qing Dynasty aspires to become the best even in the Joseon Dynasty.</p><br>
              <div class="Rating-info">
              <img src="./img/imdb.png" alt="img">
                <p>6.8/10</p>
            </div>
              <a href="#projects" type="button" id="Submit" class="buttonT">Back</a>
              <a href="#" type="button" id="Submit" class="buttonimdb">IMDb</a>
          </div>
      <div class="project-img" id="movie-container" data-movie="{{ $movie_title }}">
        <img src=" {{asset('img/sssss.jpg') }}" alt="img">
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
