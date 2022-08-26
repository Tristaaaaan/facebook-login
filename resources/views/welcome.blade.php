<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <section class="bg-[#f0f2f5] h-screen">
        <div class="max-w-screen-xl h-full mx-auto">
            <div class="container h-full flex w-full justify-center">
                <div class="flex gap-x-20 flex-col lg:flex-row">
                    <div class="flex flex-col justify-center items-center h-full w-full">
                        <div class="lg:pb-36">
                            <h1 class="text-center lg:text-left w-full text-[#1877f2] font-bold text-6xl">
                                facebook
                            </h1>
                            <p class="text-center lg:text-left w-full font-normal text-2xl max-w-md mt-4">
                                Connect with friends and the world around you on Facebook.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-y-7 w-full h-full items-center justify-center">
                        <div class="bg-white max-w-md w-full rounded-md p-5 drop-shadow-xl">
                            <!-- Email -->
                            <input type="text" placeholder="Email or phone number" class="w-full rounded-lg text-lg placeholder:focus:text-[#dfe1e3]  p-3 ring-1 ring-[#dfe1e3] focus:ring focus:ring-[#b3d4fb]/20  focus:outline focus:outline-[#5199f5] focus:text-black text-[#9d96a1]">

                            <!-- Password -->
                            <input type="text" placeholder="Password" class="mt-4 w-full rounded-lg text-lg placeholder:focus:text-[#dfe1e3]  p-3 ring-1 ring-[#dfe1e3] focus:outline focus:outline-[#5199f5] focus:ring focus:ring-[#b3d4fb]/20 focus:text-black text-[#9d96a1]">
                            
                            <!-- Login Button -->
                            <button class="mt-5 w-full bg-[#1877f2] hover:bg-[#0f59b8] rounded-lg font-semibold text-white text-xl p-3">
                                Log In
                            </button>
                            <!-- Forgot Password -->
                            <a href="#">
                                <div class="mt-5 text-sm text-[#4394f4] no-underline hover:underline flex justify-center">
                                    Forgot password?
                                </div>
                            </a>
                            <!-- Create Account Button -->
                            <div class="mt-6 flex border-t items-center justify-center border-[#e3e5e8] px-5 pt-5">
                                <button class="flex bg-[#42b72a] hover:bg-[#3a9728] rounded-lg font-semibold text-white text-lg p-3">
                                    Create new account
                                </button>
                            </div>
                        </div>
                        <!-- Create a Page -->
                        <div class="flex justify-center items-center">
                                <span class="mr-1">
                                    <a href="#" class="flex items-center text-sm font-bold no-underline hover:underline">
                                        Create a Page
                                    </a>
                                </span>
                                <span class="text-sm">
                                    for a celebrity, brand or business.
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>