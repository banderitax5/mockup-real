<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6214f26830.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = 
        {
            theme: 
            {
                extend: 
                {
                    colors: 
                        {
                                primary: '#233d3d',
                                secondary: '#f6d702',
                                accent: '#f8f2f3'
                        }
                    fontFamily: 
                        {
                                nickainley:['NICKAINLEY', 'cursive'],
                        }
                }
            }
        }
    </script>
    <title>23rd Cafe</title>
</head>
<body class="bg-[#233d3d]">
    <nav class="bg-[#f8f2f3] h-[75px] sticky top-0 z-50 w-full font-medium md:w-auto">
        <div class="flex items-center gap-[1px] ml-[2vh] md: w-auto">
            <a href=""><img src="{{ URL('/images/ico/feu.png')}}" alt="23rd" class="mt-[1] mx-[10px] w-12 "></a>
            <div>
                <a href="" class="text-[40px] md:ml-[2vh]">23rd</a>
            </div>
                <div class="ml-[2vh] p-4 md:p-0 md:ml-[3vh]">
                    <a href="" class="text-[23px] my-[10px] mx-[20px] hover:text-[#dfc302]">Home</a>    
                    <a href="" class="text-[23px] my-[10px] mx-[20px] hover:text-[#dfc302]">Menu</a>
                    <a href="" class="text-[23px] my-[10px] mx-[20px] hover:text-[#dfc302]">About Us</a>
                    <a href="{{ url('/contact-us') }}" class="text-[23px] my-[10px] mx-[20px] hover:text-[#dfc302]">Contact Us</a>
                </div>
                <div class="ml-[115vh] p-4 md:ml-[98vh] md:ml-auto">
                    <a href=""><i class="fa-regular fa-user hover:text-[#f6d702] text-[28px]"></i></a>
                </div>
        </div>
    </nav>

    <section class="h-screen">
        <div class="grid grid-cols-2 h-full">
            <div class="mt-60 ml-32 text-white">
                    <p class="font-bold text-[13pt]">
                        Great coffee. Good company. Always welcoming.
                    </p>
                <h1 class="text-[50px] text-[#f6d702] font-bold">
                    WELCOME TO <br>
                </h1>
                        <img src="{{ URL('images/the.png') }}" alt="" class="w-[450px] h-[175px] ml-[10vh]">
                    <p class="ml-[10.5vh] font-bold text-[13pt]">
                    From expertly brewed coffee and handcrafted lattes to <br>
                    freshly baked pastries and wholesome bites, we serve up <br>
                    Warmth in every sip and bite.
                    </p>
                    <button type="button" class="focus:outline-none text-[#233d3d] bg-yellow-400 hover:bg-yellow-500 font-medium 
                    rounded-full text-base px-5 py-2.5 me-2 mb-2 ml-[10vh] mt-[10px]">Order now
                        <span><i class="fa-solid fa-arrow-right items-center"></i></span>
                    </button>
            </div>
                <div>
                    <img src="{{ URL('images/setting.jpg') }}" alt="" class="h-[92vh] w-full object-cover">
                </div>
        </div>
    </section>
    
</body>
</html>
