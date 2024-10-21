@extends('layouts.global-layout')
@section('content')

<div>
    <img class="w-full h-screen object-cover" src="{{asset('assets/image/video/hero.png')}}" alt="logo-bio-futureindo">
</div>

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