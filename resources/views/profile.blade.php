<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Rizky Yanuar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Lato&family=Lilita+One&family=Merriweather&family=Montserrat&family=Open+Sans&family=Playfair+Display&family=Poppins&family=Roboto&display=swap');
</style>
<body class="overflow-x-hidden">
    <span class="absolute top-0 left-0 bottom-3/4 right-0 bg-gradient-to-b from-stone-900 to-stone-950" aria-hidden="true"></span>
    <div class="banner w-screen h-screen bg-stone-950 text-stone-100" >
        <div class="navigation-bar relative z-10 grid grid-cols-8 px-8 py-5">
            <div class="logo col-start-1 col-end-3 w-16 h-16">
                <img src="{{asset('img/image.png')}}" alt="" class="animate-bounce rounded-full">
            </div>
            <div class="nav-item col-start-6 col-end-9 flex items-center justify-center">
                <ul class="list-none flex flex-row justify-around w-96" style="font-family: 'Poppins';">
                    <li><a href="" class="text-lg">Intro</a></li>
                    <li><a href="" class="text-lg">Box</a></li>
                    <li><a href="" class="text-lg">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="typoghraphy relative z-10 pl-8 h-2/4 flex items-end">
            <div class="typo-item flex flex-col">
                <p class="text-6xl font-black mb-6" style="font-family: 'Open Sans';" id="welcome"></p>
                <p class="text-xl font-medium" style="font-family: 'Merriweather';" id="supportWelcome"></p>
            </div>
        </div>
    </div>
    <span class="absolute top-3/4 left-0 bottom-0 right-0 bg-gradient-to-b from-stone-950 to-stone-900" aria-hidden="true"></span>
    <div class="intro w-screen h-screen bg-stone-900 text-stone-100 px-8 py-5">
        <h1 class="text-4xl font-semibold mb-4" style="font-family: 'Open Sans';">Title</h1>
        <p class="text-xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eligendi quo sed eum officia explicabo? Soluta consequatur eaque architecto et vero, perspiciatis sequi animi laboriosam eligendi voluptates placeat dignissimos maiores! Cupiditate voluptatum magni non provident, sapiente neque consectetur possimus quis. Quod, delectus? Consequatur esse doloremque recusandae nobis repellat dolorum voluptas?</p><br>
        <p class="text-xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eligendi quo sed eum officia explicabo? Soluta consequatur eaque architecto et vero, perspiciatis sequi animi laboriosam eligendi voluptates placeat dignissimos maiores! Cupiditate voluptatum magni non provident, sapiente neque consectetur possimus quis. Quod, delectus? Consequatur esse doloremque recusandae nobis repellat dolorum voluptas?</p><br>
        <p class="text-xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eligendi quo sed eum officia explicabo? Soluta consequatur eaque architecto et vero, perspiciatis sequi animi laboriosam eligendi voluptates placeat dignissimos maiores! Cupiditate voluptatum magni non provident, sapiente neque consectetur possimus quis. Quod, delectus? Consequatur esse doloremque recusandae nobis repellat dolorum voluptas?</p>
    </div>
    <span class="before:content['*'] before:absolute before:top-3/4 before:left-0 before:bottom-0 before:right-0 before:bg-gradient-to-b before:from-stone-950 before:to-stone-900"></span>
    <div class="box w-screen h-screen bg-stone-900 text-stone-100 px-8 py-5">

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.2/TextPlugin.min.js"></script>
    <script>
        gsap.registerPlugin(TextPlugin);
        gsap.to('#welcome', {duration: 2, text: 'Welcome, Seeker !'});
        gsap.to('#supportWelcome', {duration: 2, text: 'This page is my profile, <br> see below for more about me'});
    </script>
</body>
</html>