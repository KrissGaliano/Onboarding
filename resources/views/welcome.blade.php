<x-app-layout>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landmark</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.2/tailwind.min.css">
    <style>
        @media(max-width:1520px) {
            .left-svg {
                display: none;
            }
        }

        /* small css for the mobile nav close */
        #nav-mobile-btn.close span:first-child {
            transform: rotate(45deg);
            top: 12px;
            position: relative;
            background: #a0aec0;
        }

        #nav-mobile-btn.close span:nth-child(2) {
            transform: rotate(-45deg);
            margin-top: 0px;
            background: #a0aec0;
        }
    </style>
</head>
<body class="overflow-x-hidden antialiased">

    <!-- End Header Section-->

    <!-- BEGIN HERO SECTION -->
    <div class="relative items-center justify-center w-full overflow-x-hidden lg:pt-40 lg:pb-40 xl:pt-40 xl:pb-64">
        <div
            class="container flex flex-col items-center justify-between h-full max-w-6xl px-8 mx-auto -mt-32 lg:flex-row xl:px-0">
            <div
                class="z-30 flex flex-col items-center w-full max-w-xl pt-48 text-center lg:items-start lg:w-1/2 lg:pt-20 xl:pt-40 lg:text-left">
                <h1 class="relative mb-4 text-3xl font-black leading-tight text-gray-900 sm:text-6xl xl:mb-8">Build the
                    Next
                    Great Thing</h1>
                <p class="pr-0 mb-8 text-base text-gray-600 sm:text-lg xl:text-xl lg:pr-20">Are you ready to start your
                    adventure and start building the next greatest SAAS app on the market?</p>
                <a href="#_"
                    class="relative self-start inline-block w-auto px-8 py-4 mx-auto mt-0 text-base font-bold text-white bg-orange-500 border-t border-gray-200 rounded-md shadow-xl sm:mt-1 fold-bold lg:mx-0">Ver más</a>

                <svg class="absolute left-0 max-w-md mt-24 -ml-64 left-svg" viewBox="0 0 423 423">
                    <defs>
                        <linearGradient x1="100%" y1="0%" x2="4.48%" y2="0%" id="linearGradient-1">
                            <stop stop-color="#FF8833" offset="0%" />
                            <stop stop-color="#FF6B00" offset="100%" />
                        </linearGradient>
                        <rect id="path-2" x="63" y="504" width="300" height="300" rx="40" />
                    </defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" opacity=".9">
                        <g id="Desktop-HD" transform="translate(-39 -531)">
                            <g id="Hero" transform="translate(43 83)">
                                <g id="Rectangle-6" transform="rotate(45 213 654)">
                                    <use fill="#000" filter="url(#filter-3)" xlink:href="#path-2" />
                                    <use fill="url(#linearGradient-1)" xlink:href="#path-2" />
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="relative flex flex-col justify-center w-full h-full lg:w-1/2 ">
                <div class="container relative left-0 w-full max-w-4xl lg:absolute xl:max-w-6xl lg:w-screen">
                    <img src="https://blogger.googleusercontent.com/img/a/AVvXsEhCcmvgqAVbxI-LIQYoGIRHUQ-_GKe2aBPWq-DaRTAJkThokyPqJKIL-HapRosESGzA9LqfgFmBrTFtvlIgUslFQOR6Tq8EEP_gi-_nzWZPPd0RAQ01IzD_-D6z6T2THgVVcI6u95AtcEWBq9mPHMDX8VEBvAU8ku1hKksCY5pkXGVRra1BaHOTg2UZZw"
                        class="w-full h-auto mt-20 mb-20 ml-0 lg:mt-24 xl:mt-40 lg:mb-0 lg:h-full lg:-ml-12">
                </div>
            </div>
        </div>
    </div>
    <!-- HERO SECTION END -->

    <!-- BEGIN FEATURES SECTION -->
    <div id="features" class="relative w-full px-8 py-10 border-t border-gray-200 md:py-16 lg:py-24 xl:py-40 xl:px-0">
        <div class="container flex flex-col items-center justify-between h-full max-w-6xl mx-auto">
            <h2 class="my-5 text-base font-medium tracking-tight text-orange-500 uppercase">Our Features</h2>
            <h3
                class="max-w-2xl px-5 mt-2 text-3xl font-black leading-tight text-center text-gray-900 sm:mt-0 sm:px-0 sm:text-6xl">
                Built and Designed with you in Mind</h3>
            <div class="flex flex-col w-full mt-0 lg:flex-row sm:mt-10 lg:mt-20">

                <div class="w-full max-w-md p-4 mx-auto mb-0 sm:mb-16 lg:mb-0 lg:w-1/3">
                    <div class="relative flex flex-col items-center justify-center w-full h-full p-20 mr-5 rounded-lg">
                        <svg class="absolute w-full h-full text-gray-100 fill-current" viewBox="0 0 377 340"
                            <g>
                                    <img src="https://blogger.googleusercontent.com/img/a/AVvXsEhCcmvgqAVbxI-LIQYoGIRHUQ-_GKe2aBPWq-DaRTAJkThokyPqJKIL-HapRosESGzA9LqfgFmBrTFtvlIgUslFQOR6Tq8EEP_gi-_nzWZPPd0RAQ01IzD_-D6z6T2THgVVcI6u95AtcEWBq9mPHMDX8VEBvAU8ku1hKksCY5pkXGVRra1BaHOTg2UZZw">
                            </g>
                        </svg>
                        <!-- FEATURE Icon 1 -->
                        <h4 class="relative mt-6 text-lg font-bold">Automated Tools</h4>
                        <p class="relative mt-2 text-base text-center text-gray-600">Automate your workflow with these
                            top of the
                            line marketing tools.</p>
                        <a href="#_" class="relative flex mt-2 text-sm font-medium text-orange-500 underline">Learn
                            More</a>
                    </div>
                </div>

                <div class="w-full max-w-md p-4 mx-auto mb-0 sm:mb-16 lg:mb-0 lg:w-1/3">
                    <div class="relative flex flex-col items-center justify-center w-full h-full p-20 mr-5 rounded-lg">
                        <svg class="absolute w-full h-full text-gray-100 fill-current" viewBox="0 0 358 372"
                            xmlns="http://www.w3.org/2000/svg">
                            <g>

                                    <!--<img src="https://blogger.googleusercontent.com/img/a/AVvXsEhCcmvgqAVbxI-LIQYoGIRHUQ-_GKe2aBPWq-DaRTAJkThokyPqJKIL-HapRosESGzA9LqfgFmBrTFtvlIgUslFQOR6Tq8EEP_gi-_nzWZPPd0RAQ01IzD_-D6z6T2THgVVcI6u95AtcEWBq9mPHMDX8VEBvAU8ku1hKksCY5pkXGVRra1BaHOTg2UZZw">
                                        -->
                            </g>
                        </svg>
                        <!-- FEATURE Icon 2 -->
                        <h4 class="relative mt-6 text-lg font-bold">Machine Learning</h4>
                        <p class="relative mt-2 text-base text-center text-gray-600">Your Marketing tools will learn how
                            to better
                            convert and sell.</p>
                        <a href="#_" class="relative flex mt-2 text-sm font-medium text-orange-500 underline">Learn
                            More</a>
                    </div>
                </div>

                <div class="w-full max-w-md p-4 mx-auto mb-16 lg:mb-0 lg:w-1/3">
                    <div class="relative flex flex-col items-center justify-center w-full h-full p-20 mr-5 rounded-lg">
                        <svg class="absolute w-full h-full text-gray-100 fill-current" viewBox="0 0 378 410"
                            xmlns="http://www.w3.org/2000/svg">
                            <g>

                                <img src="https://blogger.googleusercontent.com/img/a/AVvXsEhCcmvgqAVbxI-LIQYoGIRHUQ-_GKe2aBPWq-DaRTAJkThokyPqJKIL-HapRosESGzA9LqfgFmBrTFtvlIgUslFQOR6Tq8EEP_gi-_nzWZPPd0RAQ01IzD_-D6z6T2THgVVcI6u95AtcEWBq9mPHMDX8VEBvAU8ku1hKksCY5pkXGVRra1BaHOTg2UZZw">

                            </g>
                        </svg>
                        <!-- FEATURE Icon 3 -->
                        <h4 class="relative mt-6 text-lg font-bold">Smart Notifications</h4>
                        <p class="relative mt-2 text-base text-center text-gray-600">Our smart notifications will notify
                            you when
                            users convert.</p>
                        <a href="#_" class="relative flex mt-2 text-sm font-medium text-orange-500 underline">Learn
                            More</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END FEATURES SECTION -->

    <footer class="px-4 pt-12 pb-8 text-white bg-white border-t border-gray-200">
        <div class="container flex flex-col justify-between max-w-6xl px-4 mx-auto overflow-hidden lg:flex-row">
            <div class="w-full pl-12 mr-4 text-left lg:w-1/4 sm:text-center sm:pl-0 lg:text-left">
                <a href="/"
                    class="flex justify-start block text-left sm:text-center lg:text-left sm:justify-center lg:justify-start">
                    <span class="flex items-start sm:items-center">
                        <svg class="w-auto h-6 text-gray-800 fill-current" viewBox="0 0 194 116"
                            xmlns="http://www.w3.org/2000/svg">
                            <img
                                class="w-48 mx-auto"
                                src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgn81o5yaDvStDttIN0Mfpi4h0qdV-_H7GqnGMzEhfi8O3K9hZXhJW-AMHBZiyS9oES5-3R6QPC-hptC71y2FCGRaNl-yDz48kjNz-399zlZHFw9EE0JL13yFxC3xKXSnejjZ714PM26VDKY8nBwiDfTDNfzeoV7Vq5THnuP2L046kjb9iMV3Cf-rg9yA/s1600/Logo_WVP-Nuevo.png"
                                alt="logo"
                            />
                        </svg>
                    </span>
                </a>
                <p class="mt-6 mr-4 text-base text-gray-500">Crafting the next-level of user experience and engagement.
                </p>
            </div>
            <div class="block w-full pl-10 mt-6 text-sm lg:w-3/4 sm:flex lg:mt-0">
                <ul class="flex flex-col w-full p-0 font-medium text-left text-gray-700 list-none">
                    <li class="inline-block px-3 py-2 mt-5 font-bold tracking-wide text-gray-800 uppercase md:mt-0">
                        Product</li>
                    <li><a href="#_"
                            class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Features</a>
                    </li>
                    <li><a href="#_"
                            class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Integrations</a>
                    </li>
                    <li><a href="#_"
                            class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Pricing</a>
                    </li>
                    <li><a href="#_"
                            class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">FAQ</a></li>
                </ul>
                <ul class="flex flex-col w-full p-0 font-medium text-left text-gray-700 list-none">
                    <li class="inline-block px-3 py-2 mt-5 font-bold tracking-wide text-gray-800 uppercase md:mt-0">
                        Company</li>
                    <li><a href="#_"
                            class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Privacy</a>
                    </li>
                    <li><a href="#_" class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Terms
                            of
                            Service</a></li>
                </ul>
                <ul class="flex flex-col w-full p-0 font-medium text-left text-gray-700 list-none">
                    <li class="inline-block px-3 py-2 mt-5 font-bold tracking-wide text-gray-800 uppercase md:mt-0">
                        TailwindCSS
                    </li>
                    <li><a href="https://devdojo.com/tailwindcss/components"
                            class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Tailwind
                            Components</a></li>
                    <li><a href="https://devdojo.com/tailwindcss/templates"
                            class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Tailwind
                            Templates</a></li>
                    <li><a href="https://devdojo.com/tails"
                            class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Tails</a></li>
                </ul>
                <div class="flex flex-col w-full text-gray-700">
                    <div class="inline-block px-3 py-2 mt-5 font-bold text-gray-800 uppercase md:mt-0">Follow Us</div>
                    <div class="flex justify-start pl-4 mt-2">
                        <a class="flex items-center block mr-6 text-gray-400 no-underline hover:text-gray-600"
                            target="_blank" rel="noopener noreferrer" href="https://devdojo.com">
                            <svg viewBox="0 0 24 24" class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.998 12c0-6.628-5.372-12-11.999-12C5.372 0 0 5.372 0 12c0 5.988 4.388 10.952 10.124 11.852v-8.384H7.078v-3.469h3.046V9.356c0-3.008 1.792-4.669 4.532-4.669 1.313 0 2.686.234 2.686.234v2.953H15.83c-1.49 0-1.955.925-1.955 1.874V12h3.328l-.532 3.469h-2.796v8.384c5.736-.9 10.124-5.864 10.124-11.853z" />
                            </svg>
                        </a>
                        <a class="flex items-center block mr-6 text-gray-400 no-underline hover:text-gray-600"
                            target="_blank" rel="noopener noreferrer" href="https://devdojo.com">
                            <svg viewBox="0 0 24 24" class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.954 4.569a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.691 8.094 4.066 6.13 1.64 3.161a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.061a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.937 4.937 0 004.604 3.417 9.868 9.868 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63a9.936 9.936 0 002.46-2.548l-.047-.02z" />
                            </svg>
                        </a>
                        <a class="flex items-center block text-gray-400 no-underline hover:text-gray-600"
                            target="_blank" rel="noopener noreferrer" href="https://devdojo.com">
                            <svg viewBox="0 0 24 24" class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-4 pt-6 mt-10 text-center text-gray-500 border-t border-gray-100">© 2022 World Vision. Derechos reservados.</div>

            <div class="pt-2 pt-4 mt-2 text-center text-gray-600 border-t border-gray-100">Distributed By <a href="https://themewagon.com/">Themewagon</a></div>
    </footer>

    <!-- a little JS for the mobile nav button -->
    <script>
        if (document.getElementById('nav-mobile-btn')) {
            document.getElementById('nav-mobile-btn').addEventListener('click', function () {
                if (this.classList.contains('close')) {
                    document.getElementById('nav').classList.add('hidden');
                    this.classList.remove('close');
                } else {
                    document.getElementById('nav').classList.remove('hidden');
                    this.classList.add('close');
                }
            });
        }
    </script>
</body>
</html>

</x-app-layout>
