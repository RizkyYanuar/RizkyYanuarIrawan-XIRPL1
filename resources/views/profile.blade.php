<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Rizky Yanuar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset('css/profil.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Lato&family=Lilita+One&family=Merriweather&family=Montserrat&family=Open+Sans&family=Playfair+Display&family=Poppins&family=Roboto&display=swap');
</style>
<body class="overflow-x-hidden">
    <div class="banner w-screen bg-white text-black" >
            <div class="navigation-bar relative z-10 grid grid-cols-8 px-8 py-5">
                <div class="logo col-start-1 col-end-3 w-16 h-16">
                    <img src="{{asset('img/image.png')}}" alt="" class="animate-bounce rounded-full">
                </div>
                <div class="nav-item col-start-6 col-end-9 flex items-center justify-center">
                    <ul class="list-none flex flex-row justify-around w-96" style="font-family: 'Poppins';">
                        <li><a href="" class="text-lg font-bold hover:text-orange-700 ease-out duration-100">Intro</a></li>
                        <li><a href="" class="text-lg font-bold hover:text-orange-700 ease-out duration-100">Box</a></li>
                        <li><a href="" class="text-lg font-bold hover:text-orange-700 ease-out duration-100">Contact</a></li>
                        <li><a href="cv" class="text-lg font-bold hover:text-orange-700 ease-out duration-100">CV</a></li>
                    </ul>
                </div>
            </div>
            <div class="typoghraphy relative z-10 pl-20 h-2/4 flex items-end">
                <div class="typo-item flex flex-col">
                    <p class="text-6xl font-black mb-6" style="font-family: 'Open Sans';" id="welcome"></p>
                    <p class="text-xl font-medium" style="font-family: 'Merriweather';" id="supportWelcome"></p>
                </div>
            </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f8d41f" fill-opacity="1" d="M0,32L24,53.3C48,75,96,117,144,154.7C192,192,240,224,288,202.7C336,181,384,107,432,80C480,53,528,75,576,106.7C624,139,672,181,720,181.3C768,181,816,139,864,138.7C912,139,960,181,1008,186.7C1056,192,1104,160,1152,149.3C1200,139,1248,149,1296,149.3C1344,149,1392,139,1416,133.3L1440,128L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path></svg>    <div class="intro w-screen h-screen relative">
        <div class="slider__warpper">
            <div class="flex__container flex--pikachu flex--active" data-slide="1">
                <div class="flex__item flex__item--left">
                <div class="flex__content">
                    <p class="text--sub">About me</p>
                    <h1 class="text--big">Rizky Yanuar Irawan</h1>
                    <p class="text--normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, possimus! Et reprehenderit harum recusandae consequatur odio inventore sunt voluptatum suscipit hic quisquam eveniet, nulla, optio ullam omnis ex necessitatibus amet quo. Deserunt veniam amet ullam quo quidem voluptatibus omnis fuga illum ipsam et quae, perspiciatis cum, atque sapiente, saepe facilis earum nulla voluptatum explicabo? Exercitationem culpa sint assumenda nam saepe quasi magnam accusamus. Perspiciatis tempora quos distinctio alias neque id nesciunt ad nemo nam aliquam ullam, suscipit fuga, quas placeat consequuntur sequi? Officiis, error et! Tempora, quos fuga. Asperiores debitis ullam cupiditate aliquid perferendis quas nam quidem unde incidunt dolores.</p>
                </div>
                <p class="text__background">About me</p>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f8d41f" fill-opacity="1" d="M0,256L17.1,256C34.3,256,69,256,103,229.3C137.1,203,171,149,206,122.7C240,96,274,96,309,90.7C342.9,85,377,75,411,74.7C445.7,75,480,85,514,96C548.6,107,583,117,617,117.3C651.4,117,686,107,720,112C754.3,117,789,139,823,128C857.1,117,891,75,926,53.3C960,32,994,32,1029,64C1062.9,96,1097,160,1131,160C1165.7,160,1200,96,1234,96C1268.6,96,1303,160,1337,160C1371.4,160,1406,96,1423,64L1440,32L1440,0L1422.9,0C1405.7,0,1371,0,1337,0C1302.9,0,1269,0,1234,0C1200,0,1166,0,1131,0C1097.1,0,1063,0,1029,0C994.3,0,960,0,926,0C891.4,0,857,0,823,0C788.6,0,754,0,720,0C685.7,0,651,0,617,0C582.9,0,549,0,514,0C480,0,446,0,411,0C377.1,0,343,0,309,0C274.3,0,240,0,206,0C171.4,0,137,0,103,0C68.6,0,34,0,17,0L0,0Z"></path></svg>

    <div class="box">
        <div class="container-fluid mb-4">
            <div class="row">
                <div class="col">
                <div class="card" style="">

                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-warning">Go somewhere</a>
                    </div>
                </div>
                </div>
                <div class="col">
                <div class="card" style="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-warning">Go somewhere</a>
                    </div>
                </div>
                </div>
                <div class="col">
                <div class="card" style="">

                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-warning">Go somewhere</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <footer class="footer-distributed">
			<div class="footer-left">
				<h3>Footer</h3>
				<p class="footer-company-name"> Rizky Yanuar © 2023</p>
			</div>

			<div class="footer-center">
				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>444 S. Cedros Ave</span> Solana Beach, California</p>
				</div>
				<div>
					<i class="fa fa-phone"></i>
					<p>+1.555.555.5555</p>
				</div>
				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:rizkyyanuarirawan@gmail.com">rizkyyanuarirawan@gmail.com</a></p>
				</div>
			</div>
			<div class="footer-right">
				<div class="footer-icons">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>
				</div>
			</div>
		</footer>
    </div>



    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.2/TextPlugin.min.js"></script>
    <script>
        gsap.registerPlugin(TextPlugin);
        gsap.to('#welcome', {duration: 2, text: 'Welcome, Seeker !'});
        gsap.to('#supportWelcome', {duration: 2, text: 'This page is my profile, <br> see below for more about me'});
    </script>
    <script src="{{asset('js/profil.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script></body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>
