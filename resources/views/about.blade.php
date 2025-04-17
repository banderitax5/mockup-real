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
                <a href="" class="text-[23px] my-[10px] mx-[20px] hover:text-[#dfc302]">Menu</a>
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
                <img src="{{ URL('images/the.png') }}" alt="" class="w-[450px] h-[175px] ml-[5vh] mt-[6vh]">
                </p>
                <h1 class="font-bold ml-20 mt-[3vh] text-[17pt] whitespace-nowrap">
                    Welcome to The 23rd Cafe, where every visit is a delightful experience. We're not just about great
                    coffee<br> we serve a
                    perfect blend of flavors, from freshly brewed coffees to delicious pastas and rice meals.<br>
                    Whether you're looking to
                    unwind with a cup of our coffee or enjoy a satisfying meal, we've got something <br>for everyone.
                    Come in, relax, and
                    savor the perfect combination of comfort and taste.

                    <div class="flex justify-between items-start gap-10 mt-10">

                        <div class="flex gap-6">
                            <img src="{{ URL('images/Morning Coffee.jpeg') }}" alt="Morning Coffee"
                                class="h-[38vh] w-[38vh] object-cover rounded-lg">
                            <img src="{{ URL('images/Spaghetti Aglio e Olio with Garlic and Chili.jpeg') }}"
                                alt="Spaghetti Aglio e Olio" class="h-[38vh] w-[38vh] object-cover rounded-lg">
                            <img src="{{ URL('images/Korean Ground Beef Bowl.jpeg') }}" alt="Korean Ground Beef Bowl"
                                class="h-[38vh] w-[38vh] object-cover rounded-lg">
                        </div>

                        <div class="text-[#f6d702] font-bold text-[18pt] ml-[130vh]">
                            <p>Best Seller For Coffee</p>
                            <p class="text-white mt-4 mb-4">Coffee Name</p>
                            <p>Best Seller For Pasta</p>
                            <p class="text-white mt-4 mb-4">Pasta Name</p>
                            <p>Best Seller For Rice Meal</p>
                            <p class="text-white mt-4 mb-4">Rice Meal Name</p>
                        </div>
                    </div>

            </div>
            <div class="text-[#f6d702] font-bold text-[18pt] mt-[10vh] ml-[55vh]">
                <p>Hours</p>
                <p>Monday - Friday 00:00 - 00:00</p>
                <p>Saturday - Sunday 00:00 - 00:00</p>
            </div>
        </div>

    </section>


</body>

</html>