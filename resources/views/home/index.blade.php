@extends('layouts.global-layout')
@section('content')

<div>
    <img class="w-full h-screen object-cover" src="{{asset('assets/image/video/hero.png')}}" alt="logo-bio-futureindo">
</div>

<section>
    <div class="mx-auto 2xl:container mt-28">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-green-10 text-[44px] leading-none font-semibold">What is Biogas?</p>
                <p class="text-2xl text-green-10 max-w-[600px] mt-5">Biogas is a gas that is created when anaerobic microbes break down organic materials. Methane (CH4), carbon dioxide (CO2), and a number of other gases are the major components of biogas.</p>
            </div>
            <div>
                <img class="w-[486px] h-[450px] object-cover" src="{{asset('assets/image/landing/what-biogas.png')}}" alt="logo-bio-futureindo">
            </div>
        </div>
    </div>
</section>

<section>
    <div class="mx-auto 2xl:container mt-14">
        <p class="text-green-10 text-[44px] leading-none font-semibold">Why Biogas?</p>
        <div class="flex items-center justify-between gap-7 mt-8">
            <div class="bg-green-10 rounded-2xl py-4 px-6 w-full max-w-[400px]">
                <p class="text-2xl font-semibold text-white">Alternative Solution for Organic Waste</p>
                <p class="text-white text-lg mt-4">Manages food waste and organic industrial waste and reducing the amount of waste sent to landfills.</p>
            </div>

            <div class="bg-green-10 rounded-2xl py-[46px] px-14 w-full">
                <p class="text-2xl font-semibold text-white">Technological Development</p>
                <p class="text-white text-lg mt-4">Necessary to improve biogas production efficiency and <br> overcome current challenges.</p>
            </div>
        </div>

        <div class="flex items-center justify-between gap-7 mt-8">
            <div class="bg-green-10 rounded-2xl py-4 px-6 w-full max-w-[300px]">
                <p class="text-2xl font-semibold text-white">Substitute for LPG Fuel</p>
                <p class="text-white text-lg mt-4">Biogas can be directly used as a renewable energy source, replacing LPG.</p>
            </div>

            <div class="bg-green-10 rounded-2xl py-8 px-14 w-full">
                <p class="text-2xl font-semibold text-white">Multiple Valuable Byproducts</p>
                <p class="text-white text-lg mt-4">Organic byproducts from biogas can be used as plant fertilizers, while the process also reduces environmental pollution by managing organic waste and helps lower greenhouse gas emissions, contributing to environmental sustainability.</p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="mx-auto 2xl:container mt-14">
        <p class="text-green-10 text-[44px] leading-none font-semibold text-center">What Our Clients Say</p>
        <div class="flex items-center justify-center mt-1.5">
            <div class="bg-green-30 h-2 rounded-full w-full max-w-[238px]"></div>
        </div>

        <div class="flex items-center">

        </div>
    </div>
</section>

<br><br><br><br><br><br><br><br><br><br>

@endsection