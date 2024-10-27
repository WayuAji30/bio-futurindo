<!doctype html>
<html prefix="og: https://ogp.me/ns#">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Bio Futurindo</title>
    <meta property="og:description"
        content="CV Bio Futurindo merupakan perusahaan yang bergerak di bidang usaha pengolahan biogas seperti perancangan, pembangunan, jasa konsultasi, jasa perbaikan, jasa edukasi mengenai proses dan teknologi biogas, serta penjualan dan layanan purna jual reaktor biogas." />
    <meta property="og:determiner" content="the" />
    <meta property="og:locale" content="id_IDN" />
    <meta property="og:locale:alternate" content="en_GB" />
    <meta property="og:locale:alternate" content="es_ES" />
    <meta property="og:site_name" content="Bio Futurindo" />
    <link rel="icon" type="image/png" href="/favicon-48x48.png" sizes="48x48" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <link rel="manifest" href="/site.webmanifest" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body>
    <nav id="navbar" class="w-full px-4 py-2 mx-auto bg-white bg-opacity-50 fixed top-0 shadow lg:px-8 lg:py-3 backdrop-blur-lg backdrop-saturate-150 z-[9999]">
        <div class="container flex flex-wrap items-center justify-between mx-auto text-slate-800">
            <a href="/"
                class="">
                <img class="w-28" src="{{asset('assets/image/logo/logo-bio.png')}}" alt="logo-bio-futureindo">
            </a>
            <div class="hidden lg:block">
                <ul class="flex flex-col gap-2 mt-2 mb-4 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-6">
                    <li id="home" class="flex items-center p-1 gap-x-2 text-white font-semibold">
                        <a href="/" class="flex items-center">
                            <p id="homeLink">Home</p>
                        </a>
                    </li>
                    <li id="about" class="flex items-center p-1 gap-x-2 text-white font-semibold">
                        <a href="/about" class="flex items-center">
                            <p id="aboutLink">About Us</p>
                        </a>
                    </li>
                    <li id="services" class="flex items-center p-1 gap-x-2 text-white font-semibold">
                        <a href="/services" class="flex items-center">
                            <p id="servicesLink">Services</p>
                        </a>
                    </li>
                    <li class="flex items-center p-1 gap-x-2 text-white font-semibold border-green-10 border-2 px-3 py-1 rounded-full">
                        <button onclick="setLanguage('IDN')" class="text-green-10" id="btn-idn">
                            IDN
                        </button>
                        <div class="w-[2px] h-5 bg-green-10"></div>
                        <button onclick="setLanguage('ENG')" id="btn-eng" class="text-green-10">
                            ENG
                        </button>
                    </li>
                </ul>
            </div>
            <button
                onclick="openDrawer()"
                class="relative ml-auto h-6 max-h-[40px] w-6 max-w-[40px] select-none rounded-lg text-center align-middle text-xs font-medium uppercase text-inherit transition-all hover:bg-transparent focus:bg-transparent active:bg-transparent disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:hidden"
                type="button">
                <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </span>
            </button>
        </div>
    </nav>

    <div class="fixed top-0 z-[99999]">
        <div id="drawer" class="relative">
            <div onclick="closeDrawer()" id="close-drawer" class="h-screen w-screen bg-black opacity-15 hidden"></div>
            <div id="drawer-content" class="absolute top-0 left-0 z-[99999] w-64 bg-white h-full transition-all duration-500 transform -translate-x-full shadow-lg peer-checked:translate-x-0 px-6">
                <a href="/"
                    class="pl-6">
                    <img class="w-28" src="{{asset('assets/image/logo/logo-bio.png')}}" alt="logo-bio-futureindo">
                </a>
                <ul class="flex flex-col gap-2 mt-2 mb-4 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-6 mt-5">
                    <li id="homeDrawer" class="flex items-center p-1 gap-x-2 text-black font-semibold">
                        <a href="/" class="flex items-center">
                            <p id="homeLinkDrawer">Home</p>
                        </a>
                    </li>
                    <li id="aboutDrawer" class="flex items-center p-1 gap-x-2 text-black font-semibold">
                        <a href="/about" class="flex items-center">
                            <p id="aboutLinkDrawer">About Us</p>
                        </a>
                    </li>
                    <li id="servicesDrawer" class="flex items-center p-1 gap-x-2 text-black font-semibold">
                        <a href="/services" class="flex items-center">
                            <p id="servicesLinkDrawer">Services</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    @yield('content')

    <footer>
        <div class="relative z-0">
            <img class="absolute sm:h-[900px] md:h-[850px]" src="{{asset('assets/image/footer/bg-footer.png')}}" alt="">
            <div class="mx-auto 2xl:container py-12 absolute z-20 left-1/2 transform -translate-x-1/2">
                <div class="flex sm:flex-col md:flex-col md:gap-10 sm:gap-10 items-center justify-between">
                    <div>
                        <p class="text-black max-w-[256px]"><span class="text-green-10 font-semibold">CV Bio Futurindo</span> is a company that focuses on biogas processing businesses.</p>

                        <p class="flex items-center gap-1 text-sm text-green-50 mt-5">
                            <svg width="13" height="16" viewBox="0 0 13 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.8182 14.8571H8.16489C8.77858 14.3272 9.35733 13.7606 9.89773 13.1607C11.9253 10.9057 13 8.52857 13 6.28571C13 4.61864 12.3152 3.01984 11.0962 1.84104C9.87721 0.662243 8.22391 0 6.5 0C4.77609 0 3.12279 0.662243 1.90381 1.84104C0.68482 3.01984 0 4.61864 0 6.28571C0 8.52857 1.07176 10.9057 3.10227 13.1607C3.64267 13.7606 4.22141 14.3272 4.83511 14.8571H1.18182C1.0251 14.8571 0.874799 14.9173 0.763982 15.0245C0.653166 15.1317 0.590909 15.277 0.590909 15.4286C0.590909 15.5801 0.653166 15.7255 0.763982 15.8326C0.874799 15.9398 1.0251 16 1.18182 16H11.8182C11.9749 16 12.1252 15.9398 12.236 15.8326C12.3468 15.7255 12.4091 15.5801 12.4091 15.4286C12.4091 15.277 12.3468 15.1317 12.236 15.0245C12.1252 14.9173 11.9749 14.8571 11.8182 14.8571ZM1.18182 6.28571C1.18182 4.92174 1.74212 3.61364 2.73948 2.64917C3.73683 1.68469 5.08953 1.14286 6.5 1.14286C7.91047 1.14286 9.26317 1.68469 10.2605 2.64917C11.2579 3.61364 11.8182 4.92174 11.8182 6.28571C11.8182 10.3736 7.72097 13.7857 6.5 14.7143C5.27903 13.7857 1.18182 10.3736 1.18182 6.28571ZM9.45455 6.28571C9.45455 5.72062 9.28126 5.16823 8.95661 4.69837C8.63196 4.22852 8.17053 3.86231 7.63066 3.64606C7.09078 3.42981 6.49672 3.37323 5.9236 3.48347C5.35047 3.59371 4.82402 3.86583 4.41082 4.26541C3.99762 4.66499 3.71623 5.17408 3.60222 5.72831C3.48822 6.28255 3.54673 6.85702 3.77036 7.3791C3.99398 7.90117 4.37267 8.3474 4.85854 8.66134C5.34441 8.97529 5.91565 9.14286 6.5 9.14286C7.28359 9.14286 8.03509 8.84184 8.58918 8.30602C9.14326 7.7702 9.45455 7.04348 9.45455 6.28571ZM4.72727 6.28571C4.72727 5.94666 4.83124 5.61522 5.02603 5.33331C5.22082 5.0514 5.49768 4.83167 5.82161 4.70192C6.14553 4.57217 6.50197 4.53822 6.84584 4.60437C7.18972 4.67051 7.50559 4.83378 7.75351 5.07353C8.00143 5.31328 8.17026 5.61874 8.23866 5.95127C8.30707 6.28381 8.27196 6.6285 8.13779 6.94174C8.00361 7.25499 7.7764 7.52272 7.48487 7.71109C7.19335 7.89946 6.85061 8 6.5 8C6.02984 8 5.57894 7.81939 5.24649 7.4979C4.91404 7.17641 4.72727 6.74037 4.72727 6.28571Z" fill="#008036" />
                            </svg>
                            ADDRESS
                        </p>
                        <p class="text-sm text-black max-w-[256px] mt-1">Jl. Kelinci 3 No.26 RT006 RW015 Kaliabang Tengah, Bekasi Utara, Kota Bekasi,Jawa Barat, Indonesia 17125</p>

                        <p class="flex items-center gap-1 text-sm text-green-50 mt-5">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.2298 10.7567L11.4609 9.06793L11.4505 9.06313C11.2549 8.97944 11.0414 8.94586 10.8295 8.96541C10.6176 8.98497 10.4139 9.05705 10.2369 9.17513C10.2161 9.18889 10.196 9.20385 10.1769 9.21993L8.22969 10.8799C6.99607 10.2807 5.72246 9.01673 5.12326 7.79911L6.78567 5.82229C6.80167 5.80229 6.81687 5.78229 6.83127 5.76069C6.94682 5.58413 7.01692 5.38175 7.03534 5.17155C7.05377 4.96135 7.01994 4.74985 6.93687 4.55588V4.54628L5.24326 0.771045C5.13345 0.517655 4.94463 0.306573 4.705 0.169311C4.46537 0.0320479 4.18777 -0.0240334 3.91364 0.0094382C2.82961 0.152085 1.83457 0.684459 1.11436 1.50713C0.394161 2.3298 -0.00195276 3.3865 7.23898e-06 4.47988C7.23898e-06 10.8319 5.16806 16 11.5201 16C12.6135 16.002 13.6702 15.6058 14.4929 14.8856C15.3155 14.1654 15.8479 13.1704 15.9906 12.0864C16.0241 11.8123 15.9681 11.5348 15.831 11.2952C15.6939 11.0556 15.483 10.8667 15.2298 10.7567ZM11.5201 14.72C8.80518 14.717 6.2023 13.6372 4.28255 11.7174C2.3628 9.7977 1.28298 7.19481 1.28002 4.47988C1.27701 3.69867 1.55846 2.94306 2.07182 2.35419C2.58517 1.76531 3.29532 1.38342 4.06965 1.27985C4.06933 1.28304 4.06933 1.28626 4.06965 1.28945L5.74966 5.04949L4.09605 7.02871C4.07926 7.04802 4.06402 7.06861 4.05045 7.09031C3.93006 7.27504 3.85943 7.48775 3.84542 7.7078C3.8314 7.92786 3.87447 8.1478 3.97045 8.34632C4.69525 9.82873 6.18887 11.3111 7.68728 12.0352C7.88725 12.1302 8.10847 12.1718 8.32932 12.1558C8.55017 12.1398 8.7631 12.0668 8.94729 11.944C8.96783 11.9301 8.9876 11.9152 9.00649 11.8992L10.9513 10.2399L14.7113 11.924C14.7113 11.924 14.7177 11.924 14.7201 11.924C14.6178 12.6994 14.2365 13.411 13.6475 13.9256C13.0586 14.4402 12.3023 14.7226 11.5201 14.72Z" fill="#008036" />
                            </svg>
                            WHATSAPP / CALL
                        </p>
                        <div class="flex flex-col gap-y-0.5 mt-1">
                            <a href="" class="text-sm text-black max-w-[256px] hover:underline">+6281584777900</a>
                            <a href="" class="text-sm text-black max-w-[256px] hover:underline">+6281297668355</a>
                            <a href="" class="text-sm text-black max-w-[256px] hover:underline">+62218871814</a>
                        </div>
                    </div>
                    <div>
                        <img class="w-44 mx-auto" src="{{asset('assets/image/logo/logo-bio.png')}}" alt="logo-bio-futureindo">
                        <p class="text-center text-green-10 text-2xl font-semibold mt-8">#BiogasAdalahSolusi</p>
                        <p class="text-center text-green-10 text-2xl font-semibold mt-4">#WasteToEnergy</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="flex items-start gap-16">
                            <div>
                                <p id="navigate" class="text-black font-semibold text-center">Navigate</p>
                                <ul class="text-center flex flex-col gap-2 mt-2">
                                    <li>
                                        <a href="" class="text-light text-black hover:underline">
                                            <p id="homeLinkFooter">Home</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="text-light text-black hover:underline">
                                            <p id="aboutLinkFooter">About Us</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="text-light text-black hover:underline">
                                            <p id="servicesLinkFooter">Services</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <p id="policies" class="text-black font-semibold text-center">Policies</p>
                                <ul class="text-center flex flex-col gap-2 mt-2">
                                    <li>
                                        <a href="" class="text-light text-black hover:underline">
                                            <p id="termsLinkFooter">Terms of Service</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="text-light text-black hover:underline">
                                            <p id="maintanceLinkFooter">Maintenance Policy</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="text-light text-black hover:underline">
                                            <p id="warrantyLinkFooter">Warranty Policy</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="flex items-center gap-1 mt-5">
                            <a href="">
                                <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_b_96_3050)">
                                        <circle cx="27.0325" cy="27.0325" r="27.0325" fill="#F2EAD3" />
                                    </g>
                                    <path d="M36.1721 29.5926L31.2485 27.1308C31.0547 27.0342 30.8389 26.9905 30.6227 27.004C30.4066 27.0175 30.1979 27.0878 30.0176 27.2077L27.7574 28.7155C26.7198 28.1452 25.866 27.2913 25.2956 26.2538L26.8035 23.9936C26.9234 23.8133 26.9937 23.6046 27.0072 23.3884C27.0207 23.1723 26.977 22.9565 26.8804 22.7627L24.4186 17.8391C24.3166 17.6331 24.1589 17.4597 23.9633 17.3387C23.7678 17.2177 23.5423 17.1538 23.3124 17.1544C21.6801 17.1544 20.1147 17.8028 18.9605 18.957C17.8063 20.1112 17.1579 21.6766 17.1579 23.3089C17.162 26.8986 18.5898 30.3401 21.1281 32.8784C23.6664 35.4167 27.108 36.8446 30.6977 36.8486C31.5059 36.8486 32.3062 36.6894 33.0529 36.3802C33.7996 36.0709 34.478 35.6175 35.0495 35.046C35.621 34.4746 36.0744 33.7961 36.3836 33.0494C36.6929 32.3027 36.8521 31.5024 36.8521 30.6942C36.8523 30.4655 36.7887 30.2413 36.6686 30.0467C36.5485 29.8522 36.3766 29.6949 36.1721 29.5926ZM30.6977 34.3869C27.7606 34.3836 24.9448 33.2154 22.868 31.1386C20.7911 29.0618 19.623 26.2459 19.6197 23.3089C19.6195 22.4551 19.9151 21.6277 20.4562 20.9673C20.9973 20.307 21.7505 19.8545 22.5877 19.687L24.354 23.2258L22.8508 25.4629C22.7385 25.6314 22.6694 25.825 22.6498 26.0266C22.6302 26.2282 22.6607 26.4314 22.7385 26.6184C23.6191 28.7115 25.2843 30.3767 27.3774 31.2573C27.5649 31.3386 27.7697 31.3718 27.9733 31.3541C28.177 31.3364 28.373 31.2682 28.5436 31.1558L30.7915 29.6572L34.3303 31.4235C34.1615 32.2616 33.7071 33.0152 33.0446 33.5556C32.3821 34.096 31.5526 34.3898 30.6977 34.3869ZM27.005 11C24.2424 10.9994 21.5267 11.7141 19.1222 13.0744C16.7177 14.4347 14.7064 16.3944 13.284 18.7627C11.8616 21.131 11.0765 23.8273 11.0053 26.589C10.9341 29.3507 11.5791 32.0838 12.8775 34.5223L11.1312 39.7612C10.9865 40.195 10.9656 40.6604 11.0706 41.1055C11.1756 41.5505 11.4025 41.9575 11.7258 42.2808C12.0491 42.6041 12.4561 42.831 12.9011 42.936C13.3461 43.041 13.8116 43.02 14.2453 42.8754L19.4843 41.129C21.6303 42.2705 24.0081 42.908 26.4373 42.9932C28.8665 43.0785 31.2832 42.6092 33.5039 41.621C35.7246 40.6328 37.6911 39.1517 39.2539 37.29C40.8168 35.4284 41.935 33.2352 42.5236 30.8769C43.1123 28.5186 43.156 26.0571 42.6513 23.6794C42.1467 21.3017 41.107 19.0702 39.6112 17.1543C38.1154 15.2384 36.2028 13.6884 34.0185 12.6221C31.8342 11.5557 29.4357 11.001 27.005 11ZM27.005 40.5413C24.6248 40.5429 22.2863 39.9161 20.2259 38.7242C20.0751 38.6367 19.9073 38.5823 19.7339 38.5645C19.5604 38.5467 19.3851 38.566 19.2197 38.6211L13.4653 40.5413L15.3839 34.7869C15.4392 34.6215 15.4588 34.4463 15.4413 34.2729C15.4238 34.0994 15.3696 33.9316 15.2824 33.7806C13.7899 31.2003 13.1906 28.1995 13.5776 25.2438C13.9646 22.2881 15.3162 19.5427 17.4227 17.4335C19.5292 15.3244 22.2729 13.9693 25.2281 13.5786C28.1833 13.1879 31.1848 13.7833 33.7671 15.2725C36.3494 16.7618 38.368 19.0616 39.5099 21.8151C40.6517 24.5687 40.8529 27.6221 40.0823 30.5017C39.3117 33.3813 37.6124 35.9261 35.2479 37.7414C32.8834 39.5566 29.986 40.5408 27.005 40.5413Z" fill="black" />
                                    <defs>
                                        <filter id="filter0_b_96_3050" x="-4" y="-4" width="62.0649" height="62.0649" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feGaussianBlur in="BackgroundImageFix" stdDeviation="2" />
                                            <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_96_3050" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_96_3050" result="shape" />
                                        </filter>
                                    </defs>
                                </svg>
                            </a>
                            <a href="">
                                <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_b_96_3047)">
                                        <circle cx="27.0975" cy="27.0325" r="27.0325" fill="#F2EAD3" />
                                    </g>
                                    <path d="M27.4531 19.2893C25.992 19.2893 24.5637 19.7226 23.3489 20.5343C22.134 21.3461 21.1872 22.4998 20.628 23.8497C20.0689 25.1996 19.9226 26.6849 20.2076 28.118C20.4927 29.551 21.1963 30.8673 22.2294 31.9005C23.2626 32.9336 24.5789 33.6372 26.0119 33.9222C27.4449 34.2073 28.9303 34.061 30.2802 33.5018C31.63 32.9427 32.7838 31.9958 33.5955 30.781C34.4073 29.5661 34.8405 28.1378 34.8405 26.6768C34.8385 24.7181 34.0595 22.8403 32.6746 21.4553C31.2896 20.0703 29.4118 19.2914 27.4531 19.2893ZM27.4531 31.6017C26.4791 31.6017 25.5269 31.3129 24.717 30.7717C23.9071 30.2305 23.2758 29.4614 22.9031 28.5614C22.5303 27.6615 22.4328 26.6713 22.6228 25.7159C22.8128 24.7606 23.2819 23.8831 23.9707 23.1943C24.6594 22.5055 25.537 22.0365 26.4923 21.8464C27.4477 21.6564 28.4379 21.7539 29.3378 22.1267C30.2377 22.4994 31.0069 23.1307 31.5481 23.9406C32.0892 24.7505 32.3781 25.7027 32.3781 26.6768C32.3781 27.9829 31.8592 29.2356 30.9356 30.1592C30.012 31.0828 28.7593 31.6017 27.4531 31.6017ZM34.8405 10.6707H20.0657C17.7806 10.6731 15.5899 11.5819 13.9741 13.1977C12.3583 14.8135 11.4495 17.0043 11.447 19.2893V34.0642C11.4495 36.3492 12.3583 38.54 13.9741 40.1558C15.5899 41.7716 17.7806 42.6804 20.0657 42.6828H34.8405C37.1256 42.6804 39.3164 41.7716 40.9322 40.1558C42.548 38.54 43.4568 36.3492 43.4592 34.0642V19.2893C43.4568 17.0043 42.548 14.8135 40.9322 13.1977C39.3164 11.5819 37.1256 10.6731 34.8405 10.6707ZM40.9967 34.0642C40.9967 35.6969 40.3481 37.2628 39.1936 38.4173C38.0391 39.5718 36.4733 40.2204 34.8405 40.2204H20.0657C18.433 40.2204 16.8671 39.5718 15.7126 38.4173C14.5581 37.2628 13.9095 35.6969 13.9095 34.0642V19.2893C13.9095 17.6566 14.5581 16.0907 15.7126 14.9362C16.8671 13.7817 18.433 13.1331 20.0657 13.1331H34.8405C36.4733 13.1331 38.0391 13.7817 39.1936 14.9362C40.3481 16.0907 40.9967 17.6566 40.9967 19.2893V34.0642ZM37.303 18.6737C37.303 19.039 37.1947 19.396 36.9918 19.6998C36.7888 20.0035 36.5004 20.2402 36.1629 20.38C35.8255 20.5198 35.4541 20.5563 35.0959 20.4851C34.7376 20.4138 34.4085 20.2379 34.1502 19.9796C33.892 19.7213 33.7161 19.3923 33.6448 19.034C33.5735 18.6758 33.6101 18.3044 33.7499 17.9669C33.8897 17.6295 34.1264 17.341 34.4301 17.1381C34.7338 16.9352 35.0909 16.8268 35.4562 16.8268C35.946 16.8268 36.4157 17.0214 36.7621 17.3678C37.1084 17.7141 37.303 18.1839 37.303 18.6737Z" fill="black" />
                                    <defs>
                                        <filter id="filter0_b_96_3047" x="-3.93506" y="-4" width="62.0649" height="62.0649" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feGaussianBlur in="BackgroundImageFix" stdDeviation="2" />
                                            <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_96_3047" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_96_3047" result="shape" />
                                        </filter>
                                    </defs>
                                </svg>
                            </a>
                            <a href="">
                                <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_b_96_3041)">
                                        <circle cx="27.1626" cy="27.0325" r="27.0325" fill="#F2EAD3" />
                                    </g>
                                    <path d="M32.726 25.852L25.8662 21.2788C25.694 21.1639 25.4938 21.0979 25.287 21.0879C25.0803 21.0779 24.8746 21.1242 24.6921 21.2219C24.5096 21.3196 24.357 21.4651 24.2507 21.6427C24.1444 21.8204 24.0883 22.0236 24.0884 22.2306V31.3769C24.0883 31.584 24.1444 31.7872 24.2507 31.9648C24.357 32.1425 24.5096 32.2879 24.6921 32.3856C24.8746 32.4833 25.0803 32.5296 25.287 32.5196C25.4938 32.5096 25.694 32.4436 25.8662 32.3287L32.726 27.7556C32.8828 27.6512 33.0114 27.5097 33.1004 27.3436C33.1893 27.1776 33.2359 26.9921 33.2359 26.8038C33.2359 26.6154 33.1893 26.4299 33.1004 26.2639C33.0114 26.0978 32.8828 25.9563 32.726 25.852ZM26.375 29.2404V24.3743L30.0307 26.8038L26.375 29.2404ZM42.7141 18.4463C42.5794 17.9194 42.3214 17.4322 41.9614 17.0247C41.6013 16.6171 41.1495 16.3011 40.6433 16.1025C35.7443 14.2104 27.947 14.2275 27.5183 14.2275C27.0896 14.2275 19.2923 14.2104 14.3933 16.1025C13.8871 16.3011 13.4353 16.6171 13.0752 17.0247C12.7152 17.4322 12.4572 17.9194 12.3225 18.4463C11.9524 19.8726 11.5122 22.4793 11.5122 26.8038C11.5122 31.1283 11.9524 33.735 12.3225 35.1612C12.457 35.6883 12.7149 36.1759 13.0749 36.5837C13.435 36.9915 13.8869 37.3077 14.3933 37.5064C19.0865 39.3171 26.4322 39.38 27.424 39.38H27.6126C28.6044 39.38 35.9544 39.3171 40.6433 37.5064C41.1497 37.3077 41.6016 36.9915 41.9617 36.5837C42.3217 36.1759 42.5796 35.6883 42.7141 35.1612C43.0842 33.7321 43.5244 31.1283 43.5244 26.8038C43.5244 22.4793 43.0842 19.8726 42.7141 18.4463ZM40.5004 34.5953C40.4568 34.7706 40.3724 34.9332 40.2539 35.0695C40.1354 35.2059 39.9862 35.3123 39.8187 35.3799C35.2956 37.1263 27.6026 37.0948 27.5283 37.0948H27.5183C27.4411 37.0948 19.7539 37.1234 15.2279 35.3799C15.0604 35.3123 14.9112 35.2059 14.7928 35.0695C14.6743 34.9332 14.5898 34.7706 14.5462 34.5953C14.1989 33.2905 13.7988 30.8867 13.7988 26.8038C13.7988 22.7208 14.1989 20.317 14.5362 19.0194C14.579 18.843 14.6631 18.6793 14.7816 18.5419C14.9002 18.4045 15.0497 18.2972 15.2179 18.2291C19.5796 16.5441 26.8881 16.5141 27.4869 16.5141H27.5254C27.6026 16.5141 35.297 16.4884 39.8158 18.2291C39.9834 18.2967 40.1325 18.403 40.251 18.5394C40.3695 18.6758 40.454 18.8383 40.4975 19.0137C40.8377 20.317 41.2378 22.7208 41.2378 26.8038C41.2378 30.8867 40.8377 33.2905 40.5004 34.5882V34.5953Z" fill="black" />
                                    <defs>
                                        <filter id="filter0_b_96_3041" x="-3.86987" y="-4" width="62.0649" height="62.0649" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feGaussianBlur in="BackgroundImageFix" stdDeviation="2" />
                                            <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_96_3041" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_96_3041" result="shape" />
                                        </filter>
                                    </defs>
                                </svg>
                            </a>
                            <a href="">
                                <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_b_96_3044)">
                                        <circle cx="27.2276" cy="27.0325" r="27.0325" fill="#F2EAD3" />
                                    </g>
                                    <path d="M41.1269 10.6707H14.0396C13.3865 10.6707 12.7602 10.9301 12.2984 11.3919C11.8366 11.8537 11.5771 12.48 11.5771 13.1331V40.2204C11.5771 40.8735 11.8366 41.4998 12.2984 41.9616C12.7602 42.4234 13.3865 42.6828 14.0396 42.6828H41.1269C41.78 42.6828 42.4063 42.4234 42.8681 41.9616C43.3299 41.4998 43.5893 40.8735 43.5893 40.2204V13.1331C43.5893 12.48 43.3299 11.8537 42.8681 11.3919C42.4063 10.9301 41.78 10.6707 41.1269 10.6707ZM41.1269 40.2204H14.0396V13.1331H41.1269V40.2204ZM22.6583 24.2143V34.0642C22.6583 34.3907 22.5286 34.7039 22.2977 34.9348C22.0668 35.1657 21.7536 35.2954 21.4271 35.2954C21.1005 35.2954 20.7873 35.1657 20.5564 34.9348C20.3255 34.7039 20.1958 34.3907 20.1958 34.0642V24.2143C20.1958 23.8877 20.3255 23.5746 20.5564 23.3437C20.7873 23.1128 21.1005 22.983 21.4271 22.983C21.7536 22.983 22.0668 23.1128 22.2977 23.3437C22.5286 23.5746 22.6583 23.8877 22.6583 24.2143ZM36.2019 28.5236V34.0642C36.2019 34.3907 36.0722 34.7039 35.8413 34.9348C35.6104 35.1657 35.2972 35.2954 34.9707 35.2954C34.6441 35.2954 34.331 35.1657 34.1001 34.9348C33.8692 34.7039 33.7394 34.3907 33.7394 34.0642V28.5236C33.7394 27.7072 33.4151 26.9243 32.8379 26.3471C32.2606 25.7698 31.4777 25.4455 30.6613 25.4455C29.845 25.4455 29.0621 25.7698 28.4848 26.3471C27.9075 26.9243 27.5832 27.7072 27.5832 28.5236V34.0642C27.5832 34.3907 27.4535 34.7039 27.2226 34.9348C26.9917 35.1657 26.6786 35.2954 26.352 35.2954C26.0255 35.2954 25.7123 35.1657 25.4814 34.9348C25.2505 34.7039 25.1208 34.3907 25.1208 34.0642V24.2143C25.1223 23.9127 25.2345 23.6222 25.436 23.3978C25.6375 23.1734 25.9144 23.0308 26.2141 22.997C26.5138 22.9632 26.8154 23.0406 27.0618 23.2145C27.3083 23.3884 27.4823 23.6466 27.5509 23.9403C28.3838 23.3753 29.3549 23.0478 30.3599 22.9931C31.3649 22.9383 32.3658 23.1583 33.2552 23.6295C34.1446 24.1007 34.8888 24.8053 35.4079 25.6675C35.9271 26.5298 36.2016 27.5171 36.2019 28.5236ZM23.2739 19.9049C23.2739 20.2702 23.1656 20.6273 22.9627 20.931C22.7597 21.2347 22.4713 21.4714 22.1338 21.6112C21.7963 21.751 21.425 21.7876 21.0667 21.7163C20.7085 21.6451 20.3794 21.4692 20.1211 21.2109C19.8628 20.9526 19.6869 20.6235 19.6157 20.2652C19.5444 19.907 19.581 19.5356 19.7208 19.1982C19.8606 18.8607 20.0973 18.5723 20.401 18.3693C20.7047 18.1664 21.0618 18.0581 21.4271 18.0581C21.9169 18.0581 22.3866 18.2527 22.733 18.599C23.0793 18.9454 23.2739 19.4151 23.2739 19.9049Z" fill="black" />
                                    <defs>
                                        <filter id="filter0_b_96_3044" x="-3.80493" y="-4" width="62.0649" height="62.0649" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feGaussianBlur in="BackgroundImageFix" stdDeviation="2" />
                                            <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_96_3044" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_96_3044" result="shape" />
                                        </filter>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script async>
    AOS.init();
</script>
<script async>
    function openDrawer() {
        document.getElementById('drawer-content').classList.remove('-translate-x-full')
        document.getElementById('close-drawer').classList.remove('hidden')
    }

    function closeDrawer() {
        document.getElementById('drawer-content').classList.add('-translate-x-full')
        document.getElementById('close-drawer').classList.add('hidden')
    }
</script>
<script>
    function setLanguage(language) {
        localStorage.setItem('selectedLanguage', language);

        for (const key in content) {
            const element = document.getElementById(key);
            if (element) {
                element.textContent = content[key][language];
            }
        }

        const btnIDN = document.getElementById('btn-idn');
        const btnENG = document.getElementById('btn-eng');

        if (language === 'IDN') {
            btnIDN.classList.add('text-green-10');
            btnIDN.classList.remove('text-gray-400', 'opacity-50');
            btnENG.classList.add('text-gray-400', 'opacity-50');
            btnENG.classList.remove('text-green-10');
        } else {
            btnENG.classList.add('text-green-10');
            btnENG.classList.remove('text-gray-400', 'opacity-50');
            btnIDN.classList.add('text-gray-400', 'opacity-50');
            btnIDN.classList.remove('text-green-10');
        }
    }

    window.addEventListener('DOMContentLoaded', () => {
        const savedLanguage = localStorage.getItem('selectedLanguage') || 'IDN';
        setLanguage(savedLanguage);
    });

    const content = {
        homeLink: {
            IDN: "Beranda",
            ENG: "Home"
        },
        aboutLink: {
            IDN: "Tentang Kami",
            ENG: "About Us"
        },
        servicesLink: {
            IDN: "Layanan",
            ENG: "Services"
        },
        navigate: {
            IDN: "Navigasi",
            ENG: "Navigate"
        },
        homeLinkFooter: {
            IDN: "Beranda",
            ENG: "Home"
        },
        aboutLinkFooter: {
            IDN: "Tentang Kami",
            ENG: "About Us"
        },
        servicesLinkFooter: {
            IDN: "Layanan",
            ENG: "Services"
        },
        policies: {
            IDN: "Kebijakan",
            ENG: "Policies"
        },
        termsLinkFooter: {
            IDN: "Ketentuan Layanan",
            ENG: "Terms of Service"
        },
        maintanceLinkFooter: {
            IDN: "Kebijakan Pemeliharaan",
            ENG: "Maintenance Policy"
        },
        warrantyLinkFooter: {
            IDN: "Kebijakan Garansi",
            ENG: "Warranty Policy"
        },
        biogas: {
            IDN: "Apa itu Biogas?",
            ENG: "What is Biogas?"
        },
        descBiogas: {
            IDN: "Biogas adalah gas yang dihasilkan ketika mikroba anaerobik memecah bahan organik. Metana (CH4), karbon dioksida (CO2), dan sejumlah gas lainnya merupakan komponen utama biogas.",
            ENG: "Biogas is a gas that is created when anaerobic microbes break down organic materials. Methane (CH4), carbon dioxide (CO2), and a number of other gases are the major components of biogas."
        },
        whyBiogas: {
            IDN: "Kenapa Biogas?",
            ENG: "Why Biogas?"
        },
        whyBiogas: {
            IDN: "Kenapa Biogas?",
            ENG: "Why Biogas?"
        },
        titleWhy1: {
            IDN: "Solusi Alternatif untuk Sampah Organik",
            ENG: "Alternative Solution for Organic Waste"
        },
        descWhy1: {
            IDN: "Mengelola limbah makanan dan limbah industri organik serta mengurangi jumlah limbah yang dikirim ke tempat pembuangan sampah.",
            ENG: "Manages food waste and organic industrial waste and reducing the amount of waste sent to landfills."
        },
        titleWhy2: {
            IDN: "Pengembangan Teknologi",
            ENG: "Technological Development"
        },
        descWhy2: {
            IDN: "Diperlukan untuk meningkatkan efisiensi produksi biogas dan mengatasi tantangan saat ini.",
            ENG: "Necessary to improve biogas production efficiency and overcome current challenges."
        },
        titleWhy3: {
            IDN: "Pengganti Bahan Bakar LPG",
            ENG: "Substitute for LPG Fuel"
        },
        descWhy3: {
            IDN: "Biogas dapat langsung digunakan sebagai sumber energi terbarukan, menggantikan LPG.",
            ENG: "Biogas can be directly used as a renewable energy source, replacing LPG."
        },
        titleWhy4: {
            IDN: "Berbagai Produk Sampingan yang Berharga",
            ENG: "Multiple Valuable Byproducts"
        },
        descWhy4: {
            IDN: "Produk sampingan organik dari biogas dapat digunakan sebagai pupuk tanaman, sementara prosesnya juga mengurangi polusi lingkungan dengan mengelola limbah organik dan membantu menurunkan emisi gas rumah kaca, sehingga berkontribusi terhadap keberlanjutan lingkungan.",
            ENG: "Organic byproducts from biogas can be used as plant fertilizers, while the process also reduces environmental pollution by managing organic waste and helps lower greenhouse gas emissions, contributing to environmental sustainability."
        },
        clientSay: {
            IDN: "Apa Kata Klien Kami",
            ENG: "What Our Clients Say"
        },
        company: {
            IDN: "Gambaran Umum Perusahaan Kami",
            ENG: "Our Company Overview"
        },
        descCompany: {
            IDN: "CV Bio Futurindo merupakan perusahaan yang bergerak di bidang usaha pengolahan biogas seperti perancangan, pembangunan, jasa konsultasi, jasa perbaikan, jasa edukasi mengenai proses dan teknologi biogas, serta penjualan dan layanan purna jual reaktor biogas.",
            ENG: "CV Bio Futurindo is a company that focuses on biogas processing businesses such as design, construction, consulting services, repair services, educational services on biogas processes and technology, and biogas reactor sales and after-sales services."
        },
        register: {
            IDN: "Kami adalah Badan Usaha Terdaftar Resmi Sejak 2023",
            ENG: "We are an Officially Registered Business Entity Since 2023"
        },
        descRegister: {
            IDN: "Kami didirikan berdasarkan Akta Nomor 08 tanggal 15 September 2023, yang ditandatangani oleh Notaris Yurike Goldania, S.H., MKn. dari Kabupaten Karawang, Indonesia. Berdasarkan Keputusan Menteri Hukum dan Hak Asasi Manusia Republik Indonesia, nomor AHU-0058096-AH.01.14 tahun 2023, kami telah terdaftar dalam Sistem Administrasi Badan Usaha.",
            ENG: "We were founded on Deed Number 08 dated September 15, 2023, signed by Notary Yurike Goldania, S.H., MKn. of Karawang Regency, Indonesia. According to the Justice Decree of the Ministry of Law and Human Rights of the Republic of Indonesia, number AHU-0058096-AH.01.14 of 2023, we have been registered in the Business Entity Administration System."
        },
        vision: {
            IDN: "Visi Kami",
            ENG: "Our Vision"
        },
        descVision: {
            IDN: "Menjadi bisnis pengolahan biogas terbaik di Indonesia",
            ENG: "Becoming the finest biogas processing business in Indonesia"
        },
        mission: {
            IDN: "Misi Kami",
            ENG: "Our Mission"
        },
        descMission: {
            IDN: "Menjalankan usaha pengolahan biogas secara mandiri dan/atau terpadu berdasarkan nilai-nilai profesionalisme, etika, dan akuntabilitas.",
            ENG: "Running biogas processing businesses independently and/or integratedly based on the values of professionalism, ethics, and accountability"
        },
        achievement: {
            IDN: "Prestasi Kami",
            ENG: "Our Achievement"
        },
        descAchievement: {
            IDN: "Temukan pencapaian luar biasa kami yang mencerminkan dedikasi, inovasi, dan hasil nyata yang kami capai",
            ENG: "Discover our remarkable achievements that reflect our dedication, innovation, and tangible results achieved"
        },
        goals: {
            IDN: "Tujuan Kami",
            ENG: "Our Goals"
        },
        goals1: {
            IDN: "Menumbuhkan kesadaran terhadap masalah lingkungan dengan berpartisipasi aktif dalam pengelolaan sampah",
            ENG: "Fostering an awareness of environmental issues by actively participating in trash management"
        },
        goals2: {
            IDN: "Berkontribusi untuk mencegah perubahan iklim",
            ENG: "Contribute to preventing climate change"
        },
        goals3: {
            IDN: "Berpartisipasi dalam penciptaan dan pemanfaatan sumber energi baru terbarukan untuk membantu Indonesia menjadi mandiri dalam energi.",
            ENG: "Participate in the creation and use of new renewable energy sources to help Indonesia become energy independent."
        },
        meet: {
            IDN: "Temui Para Pendiri dari Bio Futurindo",
            ENG: "Meet The Founders of Bio Futurindo"
        },
        cv: {
            IDN: "Mengenal Bio Futurindo",
            ENG: "Get to Know Bio Futurindo"
        },
        sobatbio: {
            IDN: "Mengenal Bio FuturindoSeluruh Sobat Bio/Sahabat Bio baik masyarakat, lembaga, maupun swasta dapat turut ambil bagian untuk bersama-sama mengatasi permasalahan sampah organik sekaligus memanfaatkan energi terbarukan berupa biogas dan pupuk cair melalui penerapan program-program yang tepat.",
            ENG: "All Sobat Bio / Bio Friends, including people, organizations, and private communities, can take part in working together to solve the issue of organic waste while also obtaining the advantages of renewable energy in the form of biogas and liquid fertilizer through the implementation of the suitable programs."
        },
        discover: {
            IDN: "Temukan Layanan Paling Populer",
            ENG: "Discover Most Popular Services"
        },
        portfolio: {
            IDN: "Portofolio",
            ENG: "Portfolio"
        },
        experience: {
            IDN: "Rasakan Perjalanan Kami",
            ENG: "Experience Our Journey"
        },
    };
</script>

<script>
    function loadAOSStylesheet() {
        if (window.innerWidth >= 1440) { // Ukuran layar besar
            const aosStylesheet = document.createElement('link');
            aosStylesheet.rel = 'stylesheet';
            aosStylesheet.href = 'https://unpkg.com/aos@2.3.1/dist/aos.css';
            aosStylesheet.id = 'aos-stylesheet';
            document.head.appendChild(aosStylesheet);
        } else {
            // Menghapus stylesheet jika ukuran layar lebih kecil dari large
            const existingAOSStylesheet = document.getElementById('aos-stylesheet');
            if (existingAOSStylesheet) {
                existingAOSStylesheet.remove();
            }
        }
    }

    // Panggil fungsi saat halaman dimuat dan saat ukuran layar diubah
    loadAOSStylesheet();
    window.addEventListener('resize', loadAOSStylesheet);
</script>


</html>