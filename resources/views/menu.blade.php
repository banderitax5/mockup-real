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
    <div class="flex flex-row mt-[5vh] ml-[5vh] space-x-4">
        <button
            class="bg-white hover:bg-[#f6d702] text-black font-bold py-2 px-4 rounded-full ring-gray-700 ring-2 w-32">
            Hot
        </button>
        <button
            class="bg-white hover:bg-[#f6d702] text-black font-bold py-2 px-4 rounded-full ring-gray-700 ring-2 w-32">
            Cold
        </button>
        <button
            class="bg-white hover:bg-[#f6d702] text-black font-bold py-2 px-4 rounded-full ring-gray-700 ring-2 w-32">
            Meals
        </button>
        <button
            class="bg-white hover:bg-[#f6d702] text-black font-bold py-2 px-4 rounded-full ring-gray-700 ring-2 w-32">
            Snacks
        </button>
    </div>

    <div>
        <a href=""> <i
                class="fa-solid fa-circle-chevron-left text-white mt-[5vh] ml-[5vh] rounded-full hover:bg-[#f6d702] text-[35pt]"></i></a>
    </div>


    <div class="w-full min-h-screen gap-6 flex-wrap flex justify-center items-center">

        <div
            class="w-60 bg-white rounded-xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2x1 mt-4 mb-4 lg:mt-0">
            <img src="{{ URL('images/Morning Coffee.jpeg') }}" alt=""
                class="w-56 h-40 object-cover rounded-xl m-auto mt-2">
            <div class="p-2">

                <h2 class="font-bold text-lg mb-2">TITLE</h2>
                <span class="text-x1 font-semibold">P120</span>
            </div>
        </div>

        <div
            class="w-60 bg-white rounded-xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2x1 mt-4 mb-4 lg:mt-0">
            <img src="{{ URL('images/Spaghetti Aglio e Olio with Garlic and Chili.jpeg') }}" alt=""
                class="w-56 h-40 object-cover rounded-xl m-auto mt-2">
            <div class="p-2">

                <h2 class="font-bold text-lg mb-2">TITLE</h2>
                <span class="text-x1 font-semibold">P120</span>
            </div>
        </div>

        <div
            class="w-60 bg-white rounded-xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2x1 mt-4 mb-4 lg:mt-0">
            <img src="{{ URL('images/Spaghetti Aglio e Olio with Garlic and Chili.jpeg') }}" alt=""
                class="w-56 h-40 object-cover rounded-xl m-auto mt-2">
            <div class="p-2">

                <h2 class="font-bold text-lg mb-2">TITLE</h2>
                <span class="text-x1 font-semibold">P120</span>
            </div>
        </div>

        <div
            class="w-60 bg-white rounded-xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2x1 mt-4 mb-4 lg:mt-0">
            <img src="{{ URL('images/Spaghetti Aglio e Olio with Garlic and Chili.jpeg') }}" alt=""
                class="w-56 h-40 object-cover rounded-xl m-auto mt-2">
            <div class="p-2">

                <h2 class="font-bold text-lg mb-2">TITLE</h2>
                <span class="text-x1 font-semibold">P120</span>
            </div>
        </div>

        <div
            class="w-60 bg-white rounded-xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2x1 mt-4 mb-4 lg:mt-0">
            <img src="{{ URL('images/Spaghetti Aglio e Olio with Garlic and Chili.jpeg') }}" alt=""
                class="w-56 h-40 object-cover rounded-xl m-auto mt-2">
            <div class="p-2">

                <h2 class="font-bold text-lg mb-2">TITLE</h2>
                <span class="text-x1 font-semibold">P120</span>
            </div>
        </div>

        <div
            class="w-60 bg-white rounded-xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2x1 mt-4 mb-4 lg:mt-0">
            <img src="{{ URL('images/Spaghetti Aglio e Olio with Garlic and Chili.jpeg') }}" alt=""
                class="w-56 h-40 object-cover rounded-xl m-auto mt-2">
            <div class="p-2">

                <h2 class="font-bold text-lg mb-2">TITLE</h2>
                <span class="text-x1 font-semibold">P120</span>
            </div>
        </div>

        <div
            class="w-60 bg-white rounded-xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2x1 mt-4 mb-4 lg:mt-0">
            <img src="{{ URL('images/Spaghetti Aglio e Olio with Garlic and Chili.jpeg') }}" alt=""
                class="w-56 h-40 object-cover rounded-xl m-auto mt-2">
            <div class="p-2">

                <h2 class="font-bold text-lg mb-2">TITLE</h2>
                <span class="text-x1 font-semibold">P120</span>
            </div>
        </div>

        <div
            class="w-60 bg-white rounded-xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2x1 mt-4 mb-4 lg:mt-0">
            <img src="{{ URL('images/Spaghetti Aglio e Olio with Garlic and Chili.jpeg') }}" alt=""
                class="w-56 h-40 object-cover rounded-xl m-auto mt-2">
            <div class="p-2">

                <h2 class="font-bold text-lg mb-2">TITLE</h2>
                <span class="text-x1 font-semibold">P120</span>
            </div>
        </div>

        <div
            class="w-60 bg-white rounded-xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2x1 mt-4 mb-4 lg:mt-0">
            <img src="{{ URL('images/Spaghetti Aglio e Olio with Garlic and Chili.jpeg') }}" alt=""
                class="w-56 h-40 object-cover rounded-xl m-auto mt-2">
            <div class="p-2">

                <h2 class="font-bold text-lg mb-2">TITLE</h2>
                <span class="text-x1 font-semibold">P120</span>
            </div>
        </div>
        <div
            class="w-60 bg-white rounded-xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2x1 mt-4 mb-4 lg:mt-0">
            <img src="{{ URL('images/Spaghetti Aglio e Olio with Garlic and Chili.jpeg') }}" alt=""
                class="w-56 h-40 object-cover rounded-xl m-auto mt-2">
            <div class="p-2">
                <h2 class="font-bold text-lg mb-2">TITLE</h2>
                <span class="text-x1 font-semibold">P120</span>
            </div>
        </div>

    </div>

    </div>




</body>

</html>