@extends('layouts.global-layout')
@section('content')

<div>
    <img class="w-full h-screen object-cover" src="{{asset('assets/image/video/hero.png')}}" alt="logo-bio-futureindo">
</div>

<section>
    <div class="mx-auto 2xl:container mt-28">
        <div class="flex items-center justify-between">
            <div>
                <p id="biogas" class="text-green-10 text-[44px] leading-none font-semibold">What is Biogas?</p>
                <p id="descBiogas" class="text-2xl text-green-10 max-w-[600px] mt-5">Biogas is a gas that is created when anaerobic microbes break down organic materials. Methane (CH4), carbon dioxide (CO2), and a number of other gases are the major components of biogas.</p>
            </div>
            <div>
                <img class="w-[486px] h-[450px] object-cover" src="{{asset('assets/image/landing/what-biogas.png')}}" alt="logo-bio-futureindo">
            </div>
        </div>
    </div>
</section>

<section>
    <div class="mx-auto 2xl:container mt-14">
        <p id="whyBiogas" class="text-green-10 text-[44px] leading-none font-semibold">Why Biogas?</p>
        <div class="flex items-center justify-between gap-7 mt-8">
            <div class="bg-green-10 rounded-2xl py-4 px-6 w-full max-w-[400px]">
                <p id="titleWhy1" class="text-2xl font-semibold text-white">Alternative Solution for Organic Waste</p>
                <p id="descWhy1" class="text-white text-lg mt-4">Manages food waste and organic industrial waste and reducing the amount of waste sent to landfills.</p>
            </div>

            <div class="bg-green-10 rounded-2xl py-[46px] px-14 w-full">
                <p id="titleWhy2" class="text-2xl font-semibold text-white">Technological Development</p>
                <p id="descWhy2" class="text-white text-lg mt-4">Necessary to improve biogas production efficiency and <br> overcome current challenges.</p>
            </div>
        </div>

        <div class="flex items-center justify-between gap-7 mt-8">
            <div class="bg-green-10 rounded-2xl py-4 px-6 w-full max-w-[300px]">
                <p id="titleWhy3" class=" text-2xl font-semibold text-white">Substitute for LPG Fuel</p>
                <p id="descWhy3" class="text-white text-lg mt-4">Biogas can be directly used as a renewable energy source, replacing LPG.</p>
            </div>

            <div class="bg-green-10 rounded-2xl py-8 px-14 w-full">
                <p id="titleWhy4" class="text-2xl font-semibold text-white">Multiple Valuable Byproducts</p>
                <p id="descWhy4" class="text-white text-lg mt-4">Organic byproducts from biogas can be used as plant fertilizers, while the process also reduces environmental pollution by managing organic waste and helps lower greenhouse gas emissions, contributing to environmental sustainability.</p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="mx-auto 2xl:container mt-20">
        <p id="clientSay" class="text-green-10 text-[44px] leading-none font-semibold text-center">What Our Clients Say</p>
        <div class="flex items-center justify-center mt-1.5">
            <div class="bg-green-30 h-2 rounded-full w-full max-w-[238px]"></div>
        </div>
        <swiper-container class="mySwiper mt-20 mb-16 w-full" pagination="false" navigation="true">
            <swiper-slide class="flex items-center justify-between w-full">
                <div class="bg-green-30 px-10 py-5 rounded-2xl min-w-[400px] max-w-[450px] max-h-[250px] mx-5">
                    <div class="flex items-start gap-5">
                        <img class="rounded-full w-16 h-16 object-cover" src="{{asset('assets/image/landing/bayu.png')}}" alt="avatar">
                        <p class="text-white font-semibold text-lg">Fuqroni</p>
                    </div>
                    <blockquote class="text-white mt-8 line-clamp-4">
                        <q>
                            Biofuturindo's biogas solutions have transformed the way we manage organic waste. The system not only reduces waste efficiently but also provides clean, renewable energy that has significantly lowered our reliance on LPG. Their commitment to sustainability and innovation has greatly improved our environmental footprint, and we're proud to be partnered with such a forward-thinking company.
                        </q>
                    </blockquote>
                </div>
                <div class="bg-green-30 px-10 py-5 rounded-2xl min-w-[400px] max-w-[450px] max-h-[250px] mx-5">
                    <div class="flex items-start gap-5">
                        <img class="rounded-full w-16 h-16 object-cover" src="{{asset('assets/image/landing/bayu.png')}}" alt="avatar">
                        <p class="text-white font-semibold text-lg">Fuqroni</p>
                    </div>
                    <blockquote class="text-white mt-8 line-clamp-4">
                        <q>
                            Biofuturindo's biogas solutions have transformed the way we manage organic waste. The system not only reduces waste efficiently but also provides clean, renewable energy that has significantly lowered our reliance on LPG. Their commitment to sustainability and innovation has greatly improved our environmental footprint, and we're proud to be partnered with such a forward-thinking company.
                        </q>
                    </blockquote>
                </div>
                <div class="bg-green-30 px-10 py-5 rounded-2xl min-w-[400px] max-w-[450px] max-h-[250px] mx-5">
                    <div class="flex items-start gap-5">
                        <img class="rounded-full w-16 h-16 object-cover" src="{{asset('assets/image/landing/bayu.png')}}" alt="avatar">
                        <p class="text-white font-semibold text-lg">Fuqroni</p>
                    </div>
                    <blockquote class="text-white mt-8 line-clamp-4">
                        <q>
                            Biofuturindo's biogas solutions have transformed the way we manage organic waste. The system not only reduces waste efficiently but also provides clean, renewable energy that has significantly lowered our reliance on LPG. Their commitment to sustainability and innovation has greatly improved our environmental footprint, and we're proud to be partnered with such a forward-thinking company.
                        </q>
                    </blockquote>
                </div>
            </swiper-slide>
            <swiper-slide class="flex items-center justify-between w-full">
                <div class="bg-green-30 px-10 py-5 rounded-2xl min-w-[400px] max-w-[450px] max-h-[250px] mx-5">
                    <div class="flex items-start gap-5">
                        <img class="rounded-full w-16 h-16 object-cover" src="{{asset('assets/image/landing/bayu.png')}}" alt="avatar">
                        <p class="text-white font-semibold text-lg">Fuqroni</p>
                    </div>
                    <blockquote class="text-white mt-8 line-clamp-4">
                        <q>
                            Biofuturindo's biogas solutions have transformed the way we manage organic waste. The system not only reduces waste efficiently but also provides clean, renewable energy that has significantly lowered our reliance on LPG. Their commitment to sustainability and innovation has greatly improved our environmental footprint, and we're proud to be partnered with such a forward-thinking company.
                        </q>
                    </blockquote>
                </div>
                <div class="bg-green-30 px-10 py-5 rounded-2xl min-w-[400px] max-w-[450px] max-h-[250px] mx-5">
                    <div class="flex items-start gap-5">
                        <img class="rounded-full w-16 h-16 object-cover" src="{{asset('assets/image/landing/bayu.png')}}" alt="avatar">
                        <p class="text-white font-semibold text-lg">Fuqroni</p>
                    </div>
                    <blockquote class="text-white mt-8 line-clamp-4">
                        <q>
                            Biofuturindo's biogas solutions have transformed the way we manage organic waste. The system not only reduces waste efficiently but also provides clean, renewable energy that has significantly lowered our reliance on LPG. Their commitment to sustainability and innovation has greatly improved our environmental footprint, and we're proud to be partnered with such a forward-thinking company.
                        </q>
                    </blockquote>
                </div>
                <div class="bg-green-30 px-10 py-5 rounded-2xl min-w-[400px] max-w-[450px] max-h-[250px] mx-5">
                    <div class="flex items-start gap-5">
                        <img class="rounded-full w-16 h-16 object-cover" src="{{asset('assets/image/landing/bayu.png')}}" alt="avatar">
                        <p class="text-white font-semibold text-lg">Fuqroni</p>
                    </div>
                    <blockquote class="text-white mt-8 line-clamp-4">
                        <q>
                            Biofuturindo's biogas solutions have transformed the way we manage organic waste. The system not only reduces waste efficiently but also provides clean, renewable energy that has significantly lowered our reliance on LPG. Their commitment to sustainability and innovation has greatly improved our environmental footprint, and we're proud to be partnered with such a forward-thinking company.
                        </q>
                    </blockquote>
                </div>
            </swiper-slide>
        </swiper-container>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
<script async>
    document.getElementById('home').classList.add('underline')
</script>

@endsection