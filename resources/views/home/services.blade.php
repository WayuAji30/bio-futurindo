@extends('layouts.global-layout')
@section('content')

<div class="mx-auto 2xl:container mt-40">
    <div class="flex items-center justify-between">
        <div data-aos="fade-right" data-aos-duration="1500" data-aos-once="true" class="">
            <p class="text-black text-2xl max-w-[550px] mt-10">All <span class="text-green-50">"Sobat Bio"</span> / <span class="text-green-50">Bio Friends</span>, including people, organizations, and private communities, can take part in working together to solve the issue of organic waste while also obtaining the advantages of renewable energy in the form of biogas and liquid fertilizer through the implementation of the suitable programs.
            </p>
        </div>
        <div data-aos="fade-left" data-aos-duration="1500" data-aos-once="true" class="">
            <img class="w-[500px] h-[500px]" src="{{asset('assets/image/landing/services.png')}}" alt="hero-services">
        </div>
    </div>
</div>

<div class="relative mt-20">
    <img class="w-full max-h-[850px] object-cover" src="{{asset('assets/image/landing/bg-services.png')}}" alt="background">
    <div class="absolute top-20 w-full">
        <p class="text-white text-[44px] leading-none font-semibold text-center">Discover Most Popular Services</p>

        <div class="whitespace-nowrap overflow-x-auto w-full mt-20 px-20">
            <div class="flex items-center w-full gap-20">
                <div class="relative">
                    <img class="w-[400px] h-[500px] object-cover rounded-3xl" src="{{asset('assets/image/landing/popular.png')}}" alt="">
                    <div class="from-black w-[400px] h-[500px] rounded-3xl bg-gradient-to-t opacity-50 absolute top-0"></div>

                    <p class="uppercase text-white text-xl font-semibold absolute bottom-16 left-5">BIO ENERGY SERVICES</p>
                </div>

                <div class="relative">
                    <img class="w-[400px] h-[500px] object-cover rounded-3xl" src="{{asset('assets/image/landing/popular.png')}}" alt="">
                    <div class="from-black w-[400px] h-[500px] rounded-3xl bg-gradient-to-t opacity-50 absolute top-0"></div>

                    <p class="uppercase text-white text-xl font-semibold absolute bottom-16 left-5">BIO ENERGY SERVICES</p>
                </div>

                <div class="relative">
                    <img class="w-[400px] h-[500px] object-cover rounded-3xl" src="{{asset('assets/image/landing/popular.png')}}" alt="">
                    <div class="from-black w-[400px] h-[500px] rounded-3xl bg-gradient-to-t opacity-50 absolute top-0"></div>

                    <p class="uppercase text-white text-xl font-semibold absolute bottom-16 left-5">BIO ENERGY SERVICES</p>
                </div>

                <div class="relative">
                    <img class="w-[400px] h-[500px] object-cover rounded-3xl" src="{{asset('assets/image/landing/popular.png')}}" alt="">
                    <div class="from-black w-[400px] h-[500px] rounded-3xl bg-gradient-to-t opacity-50 absolute top-0"></div>

                    <p class="uppercase text-white text-xl font-semibold absolute bottom-16 left-5">BIO ENERGY SERVICES</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mx-auto 2xl:container mt-20">
    <p class="text-green-10 text-[44px] leading-none font-semibold text-center">Portfolio</p>

</div>

<div class="mx-auto 2xl:container mt-20 mb-20">
    <p class="text-green-10 text-[44px] leading-none font-semibold text-center">Experience Our Journey</p>
    <div class="elfsight-app-c25706b9-8b6b-43dc-82f5-1227f47acdcf" data-elfsight-app-lazy></div>
</div>

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