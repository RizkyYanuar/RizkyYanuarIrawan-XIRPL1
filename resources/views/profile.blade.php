<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil | Rizky Yanuar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset('css/profil.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

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
                        <li><a href="#about" class="text-lg font-bold hover:text-orange-700 ease-out duration-100 hover:drop-shadow-2xl">Pengenalan</a></li>
                        <li><a href="#skills" class="text-lg font-bold hover:text-orange-700 ease-out duration-100 hover:drop-shadow-2xl">Skills</a></li>
                        <li><a href="#project" class="text-lg font-bold hover:text-orange-700 ease-out duration-100 hover:drop-shadow-2xl">Project</a></li>
                        <li><a href="cv" class="text-lg font-bold hover:text-orange-700 ease-out duration-100 hover:drop-shadow-2xl">CV</a></li>
                        <li><a href="{{route('daftarsiswa')}}" class="text-lg font-bold hover:text-orange-700 ease-out duration-100 hover:drop-shadow-2xl">Siswa</a></li>
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
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="drop-shadow-lg"><path fill="#f8d41f" fill-opacity="1" d="M0,32L24,53.3C48,75,96,117,144,154.7C192,192,240,224,288,202.7C336,181,384,107,432,80C480,53,528,75,576,106.7C624,139,672,181,720,181.3C768,181,816,139,864,138.7C912,139,960,181,1008,186.7C1056,192,1104,160,1152,149.3C1200,139,1248,149,1296,149.3C1344,149,1392,139,1416,133.3L1440,128L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path></svg>    
        <div class="intro w-screen h-screen relative" id="about">
            <div class="slider__warpper">
                <div class="flex__container flex--pikachu flex--active" data-slide="1">
                <div class="flex__item flex__item--left">
                <div class="flex__content">
                    <p class="text--sub" data-aos="fade-down" data-aos-duration="800">Tentang Saya</p>
                    <h1 class="text--big" data-aos="fade-up" data-aos-duration="800">Rizky Yanuar Irawan</h1>
                    <p class="text--normal" data-aos="zoom-in-up" data-aos-duration="800">
                        Saya seorang remaja berusia 16 tahun yang lahir di kota Bandung pada tanggal 20 Januari 2007. Saat ini, saya tengah menempuh pendidikan di SMK Negeri 2 Bandung dengan mengambil jurusan Rekayasa Perangkat Lunak. Sejak SMP, saya telah menunjukkan minat dalam dunia teknologi, dan pilihan saya untuk belajar dalam bidang teknologi di SMK merupakan langkah yang tepat. Di sekolah, saya adalah siswa yang rajin dan selalu bersemangat untuk mempelajari hal-hal baru terkait dengan pengembangan perangkat lunak khususnya berbasis website.</p>
                </div>
                <p class="text__background">Tentang Saya</p>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="drop-shadow-lg"><path fill="#f8d41f" fill-opacity="1" d="M0,256L17.1,256C34.3,256,69,256,103,229.3C137.1,203,171,149,206,122.7C240,96,274,96,309,90.7C342.9,85,377,75,411,74.7C445.7,75,480,85,514,96C548.6,107,583,117,617,117.3C651.4,117,686,107,720,112C754.3,117,789,139,823,128C857.1,117,891,75,926,53.3C960,32,994,32,1029,64C1062.9,96,1097,160,1131,160C1165.7,160,1200,96,1234,96C1268.6,96,1303,160,1337,160C1371.4,160,1406,96,1423,64L1440,32L1440,0L1422.9,0C1405.7,0,1371,0,1337,0C1302.9,0,1269,0,1234,0C1200,0,1166,0,1131,0C1097.1,0,1063,0,1029,0C994.3,0,960,0,926,0C891.4,0,857,0,823,0C788.6,0,754,0,720,0C685.7,0,651,0,617,0C582.9,0,549,0,514,0C480,0,446,0,411,0C377.1,0,343,0,309,0C274.3,0,240,0,206,0C171.4,0,137,0,103,0C68.6,0,34,0,17,0L0,0Z"></path></svg>

    <div class="skills w-screen bg-white p-20" id="skills">
        <span class="before:block before:absolute before:-inset-1 before:bg-[#f8d41f] before:w-16 before:h-16 before:top-1 before:rounded-full relative inline-block">
            <span class="relative text-6xl tracking-[0.5rem]">Skills</span>
        </span>
        <div class="grid grid-flow-col gap-x-6 gap-y-20 pt-5 grid-rows-2 md:grid-rows-1">
            <img src="{{asset('img/logo-html-5-1024.png')}}" alt="HTML" style="animation: float 2s infinite; animation-delay: 2.4s" data-aos="fade-left" data-aos-duration="2000">
            <img src="{{asset('img/logo-css-3-1024.png')}}" alt="css" style="animation: float 2s infinite; animation-delay: 2.6s" data-aos="fade-right" data-aos-duration="2000">
            <img src="{{asset('img/logo-javascript-icon-1024.png')}}" alt="JavaScript" style="animation: float 2s infinite; animation-delay: 2.8s" data-aos="fade-right" data-aos-duration="2000">
            <img src="{{asset('img/bootstrap-1024.png')}}" alt="bootstrap" style="animation: float 2s infinite; animation-delay: 3s" data-aos="fade-left" data-aos-duration="2000">
            <img src="{{asset('img/logo-react-1024.png')}}" alt="React" style="animation: float 2s infinite; animation-delay: 3.2s" data-aos="fade-right" data-aos-duration="2000">
            <img src="{{asset('img/logo-laravel-1024.png')}}" alt="laravel" style="animation: float 2s infinite; animation-delay: 3.4s" data-aos="fade-right" data-aos-duration="2000">
            <img src="{{asset('img/logo-php-1024.png')}}" alt="php" style="animation: float 2s infinite; animation-delay: 3.6s" data-aos="fade-left" data-aos-duration="2000">
            <img src="{{asset('img/tailwind-css-1024.png')}}" alt="Tailwind" style="animation: float 2s infinite; animation-delay: 3.8s" data-aos="fade-left" data-aos-duration="2000">
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f8d41f" fill-opacity="1" d="M0,64L40,64C80,64,160,64,240,96C320,128,400,192,480,208C560,224,640,192,720,160C800,128,880,96,960,112C1040,128,1120,192,1200,202.7C1280,213,1360,171,1400,149.3L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>

    <div class="box-parent p-20 bg-[#f8d41f] w-screen" id="project">
        <span class="before:block before:absolute before:-inset-1 before:bg-[#000000] before:w-16 before:h-16 before:top-1 before:rounded-full relative inline-block">
            <span class="relative text-6xl tracking-[0.5rem] text-white">Project</span>
        </span>
        <div class="box-wrapper flex justify-evenly mt-20 relative">
            <div class="box-child relative bg-[#ffffff] w-96 p-3">
                <div class="after:absolute hover:after:content-['Animals Online'] hover:after:inset-0 hover:after:bg-[#111111] hover:after:opacity-25">
                    <img src="{{asset('img/dashboard.png')}}" alt="" class="object-cover">
                </div>
            </div>
            <div class="box-child relative bg-[#ffffff] w-96 p-3">
                <div class="after:absolute hover:after:content-['Animals Online'] hover:after:inset-0 hover:after:bg-[#111111] hover:after:opacity-25">
                    <img src="{{asset('img/dashboard.png')}}" alt="" class="object-cover">
                </div>
            </div>
            <div class="box-child relative bg-[#ffffff] w-96 p-3">
                <div class="after:absolute hover:after:content-['Animals Online'] hover:after:inset-0 hover:after:bg-[#111111] hover:after:opacity-25">
                    <img src="{{asset('img/dashboard.png')}}" alt="" class="object-cover">
                </div>
            </div>
        </div>
    </div>

    <div class="footer w-screen flex justify-center pb-8 bg-[#f8d41f]">
        <h1 class="text-lg">Made with &#10084; by Rizky Yanuar Irawan &#169; 2023. </h1>
    </div>


    <script src="{{asset('js/profil.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script></body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.2/TextPlugin.min.js"></script>
    <script>
        gsap.registerPlugin(TextPlugin);
        gsap.to('#welcome', {duration: 2, text: 'Selamat datang !'});
        gsap.to('#supportWelcome', {duration: 2, text: 'halaman ini berisi tentang profil saya, <br> gulir kebawah untuk selengkapnya.'});

        AOS.init();
    </script>

</html>
