@extends('client/components/layout.index')
@section('meta-tag')
<title></title>
<meta name="description" content="meta description">
@endsection

@section('main')
<div class="hidden lg:flex bg-white">
    <a href="{{route('profileDetail',['slug'=>'vision-and-mission','slider'=>0])}}" class="block h-[calc(100vh-108.8px)] relative profile-section group">
        <img src="{{asset('images/profile/from-tropical-palm-crown-1.png')}}" class="z-10 w-full h-full transition-all duration-500"/>
        <div class="absolute top-0 left-0 z-20 profile-img-section w-full h-full"></div>
        <div class="absolute top-0 left-0 z-30 w-full h-full p-10 flex justify-end flex-col">
            <h2 class="text-[30px] text-[#444444] group-hover:text-white font-montserratExtraBold mb-2 uppercase">Vision & <br/>Mission</h2>
            <p class="text-[#444444] font-montRegular">We ensure that the steps we take are in line with our vision and mission of improving environmental quality.</p>
        </div>
    </a>
    <a href="{{route('profileDetail',['slug'=>'vision-and-mission','slider'=>1])}}" class="block h-[calc(100vh-108.8px)] relative profile-section group">
        <img src="{{asset('images/profile/from-tropical-palm-crown-2.png')}}" class="z-10 w-full h-full transition-all duration-500"/>
        <div class="absolute top-0 left-0 z-20 profile-img-section w-full h-full"></div>
        <div class="absolute top-0 left-0 z-30 w-full h-full p-10 flex justify-end flex-col">
            <h2 class="text-[30px] text-[#444444] group-hover:text-white font-montserratExtraBold mb-2 uppercase">our values</h2>
            <p class="text-[#444444] font-montRegular">We ensure that the steps we take are in line with our vision and mission of improving environmental quality.</p>
        </div>
    </a>
    <a href="{{route('profileDetail',['slug'=>'vision-and-mission','slider'=>2])}}" class="block h-[calc(100vh-108.8px)] relative profile-section group">
        <img src="{{asset('images/profile/from-tropical-palm-crown-3.png')}}" class="z-10 w-full h-full transition-all duration-500"/>
        <div class="absolute top-0 left-0 z-20 profile-img-section w-full h-full"></div>
        <div class="absolute top-0 left-0 z-30 w-full h-full p-10 flex justify-end flex-col">
            <h2 class="text-[30px] text-[#444444] group-hover:text-white font-montserratExtraBold mb-2 uppercase">Company<br/>Story</h2>
            <p class="text-[#444444] font-montRegular">We ensure that the steps we take are in line with our vision and mission of improving environmental quality.</p>
        </div>
    </a>
    <a href="{{route('profileDetail',['slug'=>'vision-and-mission','slider'=>3])}}" class="block h-[calc(100vh-108.8px)] relative profile-section group">
        <img src="{{asset('images/profile/from-tropical-palm-crown-4.png')}}" class="z-10 w-full h-full transition-all duration-500"/>
        <div class="absolute top-0 left-0 z-20 profile-img-section w-full h-full"></div>
        <div class="absolute top-0 left-0 z-30 w-full h-full p-10 flex justify-end flex-col">
            <h2 class="text-[30px] text-[#444444] group-hover:text-white font-montserratExtraBold mb-2 uppercase">our<br/>Milestone</h2>
            <p class="text-[#444444] font-montRegular">We ensure that the steps we take are in line with our vision and mission of improving environmental quality.</p>
        </div>
    </a>
</div>

<div class="block lg:hidden bg-white profile-slider">
    <a href="{{route('profileDetail',['slug'=>'vision-and-mission','slider'=>0])}}" class="block h-[calc(100vh-108.8px)] relative profile-section group">
        <img src="{{asset('images/profile/from-tropical-palm-crown-1.png')}}" class="z-10 w-full h-full transition-all duration-500"/>
        <div class="absolute top-0 left-0 z-20 profile-img-section w-full h-full"></div>
        <div class="absolute top-0 left-0 z-30 w-full h-full p-10 flex justify-center lg:justify-end flex-col">
            <h2 class="text-[30px] text-[#444444] group-hover:text-white font-montserratExtraBold mb-2 uppercase">Vision & <br/>Mission</h2>
            <p class="text-[#444444] font-montRegular">We ensure that the steps we take are in line with our vision and mission of improving environmental quality.</p>
        </div>
    </a>
    <a href="{{route('profileDetail',['slug'=>'vision-and-mission','slider'=>1])}}" class="block h-[calc(100vh-108.8px)] relative profile-section group">
        <img src="{{asset('images/profile/from-tropical-palm-crown-2.png')}}" class="z-10 w-full h-full transition-all duration-500"/>
        <div class="absolute top-0 left-0 z-20 profile-img-section w-full h-full"></div>
        <div class="absolute top-0 left-0 z-30 w-full h-full p-10 flex justify-center lg:justify-end flex-col">
            <h2 class="text-[30px] text-[#444444] group-hover:text-white font-montserratExtraBold mb-2 uppercase">our values</h2>
            <p class="text-[#444444] font-montRegular">We ensure that the steps we take are in line with our vision and mission of improving environmental quality.</p>
        </div>
    </a>
    <a href="{{route('profileDetail',['slug'=>'vision-and-mission','slider'=>2])}}" class="block h-[calc(100vh-108.8px)] relative profile-section group">
        <img src="{{asset('images/profile/from-tropical-palm-crown-3.png')}}" class="z-10 w-full h-full transition-all duration-500"/>
        <div class="absolute top-0 left-0 z-20 profile-img-section w-full h-full"></div>
        <div class="absolute top-0 left-0 z-30 w-full h-full p-10 flex justify-center lg:justify-end flex-col">
            <h2 class="text-[30px] text-[#444444] group-hover:text-white font-montserratExtraBold mb-2 uppercase">Company<br/>Story</h2>
            <p class="text-[#444444] font-montRegular">We ensure that the steps we take are in line with our vision and mission of improving environmental quality.</p>
        </div>
    </a>
    <a href="{{route('profileDetail',['slug'=>'vision-and-mission','slider'=>3])}}" class="block h-[calc(100vh-108.8px)] relative profile-section group">
        <img src="{{asset('images/profile/from-tropical-palm-crown-4.png')}}" class="z-10 w-full h-full transition-all duration-500"/>
        <div class="absolute top-0 left-0 z-20 profile-img-section w-full h-full"></div>
        <div class="absolute top-0 left-0 z-30 w-full h-full p-10 flex justify-center lg:justify-end flex-col">
            <h2 class="text-[30px] text-[#444444] group-hover:text-white font-montserratExtraBold mb-2 uppercase">our<br/>Milestone</h2>
            <p class="text-[#444444] font-montRegular">We ensure that the steps we take are in line with our vision and mission of improving environmental quality.</p>
        </div>
    </a>
</div>
@endsection