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
            <a href="{{ url('/') }}"><img src="{{ URL('/images/ico/feu.png')}}" alt="23rd" class="mt-[1] mx-[10px] w-12 "></a>
            <div>
                <a href="{{ url('/') }}" class="text-[40px] md:ml-[2vh]">23rd</a>
            </div>
                <div class="ml-[2vh] p-4 md:p-0 md:ml-[3vh]">
                    <a href="{{ url('/') }}" class="text-[23px] my-[10px] mx-[20px] hover:text-[#dfc302]">Home</a>    
                    <a href="{{ url('/menus') }}" class="text-[23px] my-[10px] mx-[20px] hover:text-[#dfc302]">Menu</a>
                    <a href="{{ url('/about-us') }}" class="text-[23px] my-[10px] mx-[20px] hover:text-[#dfc302]">About Us</a>
                    <a href="{{ url('/contact-us') }}" class="text-[23px] my-[10px] mx-[20px] hover:text-[#dfc302]">Contact Us</a>
                </div>
                <div class="ml-[115vh] p-4 md:ml-[98vh] md:ml-auto">
                    <a href=""><i class="fa-regular fa-user hover:text-[#f6d702] text-[28px]"></i></a>
                </div>
        </div>
    </nav>
    <section class="h-5/6">
        <div class="flex">
            <img src="{{ URL('images/the.png') }}" alt="" class="w-[450px] h-[175px] ml-20 mt-[6vh]">

            <p class="text-[#f6d702] font-bold ml-[100vh] text-[18pt] mt-[10vh]">Hours <br>
            <span>Monday - Friday 00:00 - 00:00</span> <br>
            <span>Saturday - Sunday 00:00 - 00:00</span> <br>
            </p>

        </div>
                <h1 class="text-white font-bold ml-[9vh] mt-[2vh] mb-[20px] text-[17pt] whitespace-nowrap">
                Welcome to The 23rd Cafe, where every visit is a delightful experience. We're not just about great coffee<br> we serve a 
                perfect blend of flavors, from freshly brewed coffees to delicious pastas and rice meals.<br> Whether you're looking to 
                unwind with a cup of our coffee or enjoy a satisfying meal, we've got something <br>for everyone. Come in, relax, and 
                savor the perfect combination of comfort and taste. 
               
        <div class="flex gap-10 mt-[20px]">
            <img src="{{ URL(path: 'images/Morning Coffee.jpeg') }}" alt="" class="h-[38vh] w-[vh] object-cover rounded-lg">
            <img src="{{ URL('images/Spaghetti Aglio e Olio with Garlic and Chili.jpeg') }}" alt="" class="h-[38vh] w-[38vh] object-cover rounded-lg">
            <img src="{{ URL('images/Korean Ground Beef Bowl.jpeg') }}" alt="" class="h-[38vh] w-[38vh] object-cover rounded-lg">

            <p class="text-[#f6d702] font-bold text-[18pt] ml-[19vh] leading-[5vh]">Best Seller For Coffee <br>
            <span class="text-white mr-[10vh]">Coffee Name</span> <br>
            <span>Best Seller For Pasta</span> <br>
            <span class="text-white">Pasta Name</span> <br>
            <span>Best Seller For Rice Meal</span> <br>
            <span class="text-white">Rice Meal Name</span> <br>
            </p>
        </div>

    </section>


</body>
</html>
