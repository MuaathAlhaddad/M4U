
@extends('master')
@section('content')

    <!-- Hero Section  -->
    <section id="hero">
        <div class="hero container">
        <div>
        <h1>Answer<span></span></h1>
        <h1>The Questions Below To Find<span></span></h1>
        <h1>The Movie Based On Your Mood<span></span></h1>
        <a href="#projects" type="button" class="cta">Questions</a>
        </div>
        </div>
    </section>
    <!-- End Hero Section  -->

    <!-- Questions Section -->
    <section id="projects">
    <div class="projects container">
        <form action="{{route('result')}}" method="post">
            @csrf
            <div class="all-projects">
            <div class="projects-header">
            <div id="Q1"></div>
            <!--Q-->
            <h1 class="section-title">ques<span>tions</span></h1>
            </div>

            <!--Q1-->
            <div class="project-item">
                <div class="project-info">
                <h1 class="section-question"><span>Q</span>uestion <span>1</span></h1>
                <center><h2>What are you feeling today?</h2>
                    <input href="#Q2" type="radio" name="feeling" id="Happy" value="Happy" checked="checked">
                    <label for="Happy">Happy</label>
                    <input href="#Q2" type="radio" name="feeling" id="Sad" value="Sad">
                    <label for="Sad">Sad</label>
                    <input href="#Q2" type="radio" name="feeling" id="Angry" value="Angry">
                    <label for="Angry">Angry</label>
                    <input href="#Q2" type="radio" name="feeling" id="Scared" value="Scared">
                    <label for="Scared">Scared</label>
                </div>
                <div class="project-img">
                <img src="./img/11.jpg" alt="img">
                <div id="Q2"></div>
                </div>
            </div>
            <!--Q2-->
            <div class="project-item">
                <div class="project-info">
                <h1 class="section-question"><span>Q</span>uestion <span>2</span></h1>
                <center><h2>What is the movie language?</h2>
                    <input href="#Q3" type="radio" name="language" id="English" value="English" checked="checked">
                    <label for="English">English</label>
                    <input href="#Q3" type="radio" name="language" id="Malay" value="Malay">
                    <label for="Malay">Malay</label>
                    <input href="#Q3" type="radio" name="language" id="Korean" value="Korean">
                    <label for="Korean">Korean</label>
                    <input href="#Q3" type="radio" name="language" id="Japanies" value="Japanies">
                    <label for="Japanies">Japanese</label>
                </div>
                <div class="project-img">
                <img src="./img/hh.jpg" alt="img">
                <div id="Q3"></div>
                </div>
            </div>
            <div class="project-item">
                <div class="project-info">
                <!--Q3-->
                <h1 class="section-question"><span>Q</span>uestion <span>3</span></h1>
                <center><h2>What is the occasion?</h2>
                    <input href="#Q3" type="radio" name="occasion" id="Alone" value="Alone" checked="checked">
                    <label for="Alone">Alone</label>
                    <input href="#Q3" type="radio" name="occasion" id="Date" value="Date">
                    <label for="Date">Date</label>
                    <input href="#Q3" type="radio" name="occasion" id="Family" value="Family">
                    <label for="Family">Family</label>
                    <input href="#Q3" type="radio" name="occasion" id="Kids" value="Kids">
                    <label for="Kids">Kids</label><br>
                    <button type="submit" id="Submit" class="q1button" >Submit</button>
                </div>
                <div class="project-img">
                <img src="./img/jj.jpg" alt="img">
                </div>
            </div>
            </div>
        </form>
    </div>
    </section>

    <!-- End Questions Section -->

    <!-- About Section -->
    <section id="about">
    <div class="about container">
        <div class="col-left">
        <div class="about-img">
            <img src="./img/9.jpg" alt="img">
        </div>
        </div>
        <div class="col-right">
        <h1 class="section-title">About <span>Website</span></h1>
        <h2 class="section-title">Movie <span>For</span> You</h2>
        <p class="p span" style="text-align: justify;">We live in a privileged world
            where we can easily have access to entertainment, but this has created
            another problem where we can call choices overload. Most of the
            recommendation systems are based on users’ previous choices
            but for certain cases that would not be beneficial as human emotions are changing
            frequently. To know what the users really want, we need to understand
            their emotion first and based on that, the recommendation should be given.
        <span>“Movie For You”</span>  is a web application that focuses on understanding human
            emotion in order to provide a movie recommendation. </p>
        </div>
    </div>
    </section>
    <!-- End About Section -->

    <!-- Donation Section -->
    <section id="Donations">
        <div class="Donations container">
        <div class="Donation-top">
            <h1 class="section-title">Don<span>at</span>ion</h1>
            <p>Form here you can support your boy!</p>
        <!--<img src="./img/d.png" alt="img">-->
        </div>
        <div class="Donation-bottom">
            <div class="Donation-item">
            <!-- <div class="icon"><img src="./img/d.png"/></div>-->
            <h2 class="section-title"><span>D</span>onate <span>H</span>ere</h2>
            <p>key in the amount you like to donate for me.</p>
            <input type="text" placeholder="RM50">
            <a href="#" type="button" class="button">Donate</a>
            </div>
        </div>
        </div>
    </section>
    <!-- End Donation Section -->

    <!-- Contact Section -->
    <section id="contact">
        <div class="contact container">
        <div><h1 class="section-title">Contact <span>info</span></h1></div>
        <div class="contact-items">
            <div class="contact-item">
            <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png"/></div>
            <div class="contact-info">
                <h1>Phone</h1>
                <h2>+60 234 123 1234</h2>
                <h2>+60 234 123 1234</h2>
            </div>
            </div>
            <div class="contact-item">
            <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png"/></div>
            <div class="contact-info">
                <h1>Email</h1>
                <h2>NasserAlnassery.na@gmail.com</h2>
                <h2>info@gmail.com</h2>
            </div>
            </div>
            <div class="contact-item">
            <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png"/></div>
            <div class="contact-info">
                <h1>Address</h1>
                <h2>Cyberjaya, Selangor, Malaysia.</h2>
            </div>
            </div>
        </div>
        </div>
    </section>
    <!-- End Contact Section -->
@endsection
