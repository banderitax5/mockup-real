<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
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
                        nickainley: ['NICKAINLEY', 'cursive'],
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
            <a href="{{ url('/') }}"><img src="{{ URL('/images/ico/feu.png')}}" alt="23rd"
                    class="mt-[1] mx-[10px] w-12 "></a>
            <div>
                <a href="{{ url('/') }}" class="text-[40px] md:ml-[2vh]">23rd</a>
            </div>
            <div class="ml-[2vh] p-4 md:p-0 md:ml-[3vh]">
                <a href="{{ url('/') }}" class="text-[23px] my-[10px] mx-[20px] hover:text-[#dfc302]">Home</a>
                <a href="{{ url('/menus') }}" class="text-[23px] my-[10px] mx-[20px] hover:text-[#dfc302]">Menu</a>
                <a href="{{ url('/about-us') }}" class="text-[23px] my-[10px] mx-[20px] hover:text-[#dfc302]">About
                    Us</a>
                <a href="{{ url('/contact-us') }}" class="text-[23px] my-[10px] mx-[20px] hover:text-[#dfc302]">Contact
                    Us</a>
            </div>
            <div class="ml-[115vh] p-4 md:ml-[98vh] md:ml-auto">
                <a href=""><i class="fa-regular fa-user hover:text-[#f6d702] text-[28px]"></i></a>
            </div>
        </div>
    </nav>

    <section class="h-screen">
        <div class="grid grid-cols-2 h-full">
            <div class=" text-white">
                <p class="text-[50pt] ml-20 mt-16 text-[#f6d702] font-bold">
                    Contact Us
                </p>
                <h1 class="font-bold ml-20 mt-2 mb-10 text-[20pt]">
                    We’re here to help and answer any questions you have.
                    Feel Free to <br> contact us through any of the following methods.<br>
                </h1>
                <div>



                </div>
                <div>
                    <div class="flex items-center">
                        <img src="{{ URL('images/telephone.png') }}" alt=""
                            class="h-auto w-[5%] ml-[10vh] object-cover">
                        <p class=" text-[#0a0a0a] ml-[4vh] font-bold text-[16pt]">
                            000-000-0000
                        </p>
                    </div>
                    <div class="flex items-center mt-10">
                        <img src="{{ URL('images/mail.png') }}" alt="" class="h-auto w-[5%] ml-[10vh] object-cover">
                        <p class=" text-[#0a0a0a] ml-[4vh] font-bold text-[16pt]">
                            example@gmail.com
                        </p>
                    </div>

                    <div class="flex items-center mt-10">
                        <img src="{{ URL('images/location.png') }}" alt="" class="h-auto w-[5%] ml-[10vh] object-cover">
                        <p class=" text-[#0a0a0a] ml-[4vh] font-bold text-[16pt]">
                            FEU Roosevelt Cainta
                        </p>
                    </div>

                    <div class="flex items-center mt-10">
                        <img src="{{ URL('images/telephone2.png') }}" alt=""
                            class="h-auto w-[100%] ml-[115vh] mt-[-40vh] object-cover">
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>