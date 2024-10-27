@extends('layouts.global-layout')
@section('content')

<div class="mx-auto 2xl:container mt-40 sm:px-6">
    <div class="flex sm:flex-col-reverse items-center justify-between">
        <div data-aos="fade-right" data-aos-duration="1500" data-aos-once="true" class="">
            <p id="sobatbio" class="text-black text-2xl max-w-[550px] mt-10 sm:text-center">All <span class="text-green-50">"Sobat Bio"</span> / <span class="text-green-50">Bio Friends</span>, including people, organizations, and private communities, can take part in working together to solve the issue of organic waste while also obtaining the advantages of renewable energy in the form of biogas and liquid fertilizer through the implementation of the suitable programs.
            </p>
        </div>
        <div data-aos="fade-left" data-aos-duration="1500" data-aos-once="true" class="">
            <img class="w-[500px] h-[500px]" src="{{asset('assets/image/landing/services.png')}}" alt="hero-services">
        </div>
    </div>
</div>

<div class="relative mt-20">
    <img class="w-full max-h-[850px] sm:h-[700px] object-cover" src="{{asset('assets/image/landing/bg-services.png')}}" alt="background">
    <div class="absolute top-20 w-full sm:px-6">
        <p id="discover" class="text-white text-[44px] leading-none font-semibold text-center">Discover Most Popular Services</p>

        <div class="whitespace-nowrap overflow-x-auto w-full mt-20 no-scrollbar">
            <div class="flex items-center w-full gap-20">
                <div class="relative shrink-0 ml-20">
                    <img class="w-[400px] h-[500px] sm:w-[250px] sm:h-[350px] object-cover rounded-3xl" src="{{asset('assets/image/landing/popular.png')}}" alt="">
                    <div class="from-black w-[400px] h-[500px] sm:w-[250px] sm:h-[350px] rounded-3xl bg-gradient-to-t opacity-50 absolute top-0"></div>

                    <p class="uppercase text-white text-xl font-semibold absolute bottom-16 left-5">BIO ENERGY SERVICES</p>
                </div>

                <div class="relative shrink-0">
                    <img class="w-[400px] h-[500px] sm:w-[250px] sm:h-[350px] object-cover rounded-3xl" src="{{asset('assets/image/landing/popular.png')}}" alt="">
                    <div class="from-black w-[400px] h-[500px] sm:w-[250px] sm:h-[350px] rounded-3xl bg-gradient-to-t opacity-50 absolute top-0"></div>

                    <p class="uppercase text-white text-xl font-semibold absolute bottom-16 left-5">BIO ENERGY SERVICES</p>
                </div>

                <div class="relative shrink-0">
                    <img class="w-[400px] h-[500px] sm:w-[250px] sm:h-[350px] object-cover rounded-3xl" src="{{asset('assets/image/landing/popular.png')}}" alt="">
                    <div class="from-black w-[400px] h-[500px] sm:w-[250px] sm:h-[350px] rounded-3xl bg-gradient-to-t opacity-50 absolute top-0"></div>

                    <p class="uppercase text-white text-xl font-semibold absolute bottom-16 left-5">BIO ENERGY SERVICES</p>
                </div>

                <div class="relative shrink-0 pr-20">
                    <img class="w-[400px] h-[500px] sm:w-[250px] sm:h-[350px] object-cover rounded-3xl" src="{{asset('assets/image/landing/popular.png')}}" alt="">
                    <div class="from-black w-[400px] h-[500px] sm:w-[250px] sm:h-[350px] rounded-3xl bg-gradient-to-t opacity-50 absolute top-0"></div>

                    <p class="uppercase text-white text-xl font-semibold absolute bottom-16 left-5">BIO ENERGY SERVICES</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mx-auto 2xl:container mt-20">
    <p id="portfolio" class="text-green-10 text-[44px] leading-none font-semibold text-center">Portfolio</p>
    <swiper-container class="mySwiper mt-20 mb-16 w-full" pagination="false" navigation="true">
        <swiper-slide class="flex items-center justify-center gap-20 w-full">
            <div class="bg-green-30 rounded-2xl w-fit">
                <img class="w-72 h-64 object-cover rounded-t-2xl" src="{{asset('assets/image/landing/popular.png')}}" alt="">
                <p class="font-semibold text-2xl text-white w-72 text-center mt-3">Teaching & Education</p>
                <p class="text-white w-72 text-center mt-6">Deksripsi Kegiatan</p>
                <p class="text-white w-72 text-center mt-6 pb-5">SD 01 Bekasi | 28 September 2024</p>
            </div>
            <div class="bg-green-30 rounded-2xl w-fit">
                <img class="w-72 h-64 object-cover rounded-t-2xl" src="{{asset('assets/image/landing/popular.png')}}" alt="">
                <p class="font-semibold text-2xl text-white w-72 text-center mt-3">Teaching & Education</p>
                <p class="text-white w-72 text-center mt-6">Deksripsi Kegiatan</p>
                <p class="text-white w-72 text-center mt-6 pb-5">SD 01 Bekasi | 28 September 2024</p>
            </div>
            <div class="bg-green-30 rounded-2xl w-fit">
                <img class="w-72 h-64 object-cover rounded-t-2xl" src="{{asset('assets/image/landing/popular.png')}}" alt="">
                <p class="font-semibold text-2xl text-white w-72 text-center mt-3">Teaching & Education</p>
                <p class="text-white w-72 text-center mt-6">Deksripsi Kegiatan</p>
                <p class="text-white w-72 text-center mt-6 pb-5">SD 01 Bekasi | 28 September 2024</p>
            </div>
        </swiper-slide>
        <swiper-slide class="flex items-center justify-center gap-20 w-full">
            <div class="bg-green-30 rounded-2xl w-fit">
                <img class="w-72 h-64 object-cover rounded-t-2xl" src="{{asset('assets/image/landing/popular.png')}}" alt="">
                <p class="font-semibold text-2xl text-white w-72 text-center mt-3">Teaching & Education</p>
                <p class="text-white w-72 text-center mt-6">Deksripsi Kegiatan</p>
                <p class="text-white w-72 text-center mt-6 pb-5">SD 01 Bekasi | 28 September 2024</p>
            </div>
            <div class="bg-green-30 rounded-2xl w-fit">
                <img class="w-72 h-64 object-cover rounded-t-2xl" src="{{asset('assets/image/landing/popular.png')}}" alt="">
                <p class="font-semibold text-2xl text-white w-72 text-center mt-3">Teaching & Education</p>
                <p class="text-white w-72 text-center mt-6">Deksripsi Kegiatan</p>
                <p class="text-white w-72 text-center mt-6 pb-5">SD 01 Bekasi | 28 September 2024</p>
            </div>
            <div class="bg-green-30 rounded-2xl w-fit">
                <img class="w-72 h-64 object-cover rounded-t-2xl" src="{{asset('assets/image/landing/popular.png')}}" alt="">
                <p class="font-semibold text-2xl text-white w-72 text-center mt-3">Teaching & Education</p>
                <p class="text-white w-72 text-center mt-6">Deksripsi Kegiatan</p>
                <p class="text-white w-72 text-center mt-6 pb-5">SD 01 Bekasi | 28 September 2024</p>
            </div>
        </swiper-slide>
    </swiper-container>
</div>

<div class="mx-auto 2xl:container mt-20 mb-20">
    <p id="experience" class="text-green-10 text-[44px] leading-none font-semibold text-center mb-10">Experience Our Journey</p>
    <div class="elfsight-app-c25706b9-8b6b-43dc-82f5-1227f47acdcf" data-elfsight-app-lazy></div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
<script src="https://static.elfsight.com/platform/platform.js" async></script>
<script async>
    document.getElementById('services').classList.add('underline', 'text-green-10')
    document.getElementById('services').classList.remove('text-white')
    document.getElementById('home').classList.add('text-green-10')
    document.getElementById('home').classList.remove('text-white')
    document.getElementById('about').classList.add('text-green-10')
    document.getElementById('about').classList.remove('text-white')
    document.getElementById('navbar').classList.remove('bg-opacity-50', 'backdrop-blur-lg')
</script>

@endsection