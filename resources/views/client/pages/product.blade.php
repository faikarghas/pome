@extends('client/components/layout.index')
@section('meta-tag')
<title></title>
<meta name="description" content="meta description">
@endsection

@section('main')
<div class="flex flex-wrap px-[30px] lg:px-32 bg-[#FAFAFA] mt-[88px] lg:mt-0">
    <div class="hidden lg:block w-[30%] relative">
        <img src="{{asset('images/ps-bg.png')}}" class="w-full object-cover"/>
        <div class="bg-p absolute top-0 left-0 w-full h-full"></div>
        <div class="absolute top-0 left-0 p-10 w-full flex justify-center "> 
            <img src="{{asset('images/pr1.png')}}" class=" object-contain"/>
            <div class="border-[8px] border-white bg-[#FD8C05] w-[145px] h-[145px] rounded-full absolute top-[50%] translate-y-[-50%] right-[-40px]"><div></div></div>
        </div>
    </div>
    <div class="w-full block lg:hidden px-0 py-[30px] lg:p-32">
        <img src="{{$product->image}}" />
    </div>
    <div class="w-full lg:w-[70%] px-0 py-[30px] lg:p-32">
        <div class="mb-6">
            <h1 class="uppercase text-[#444444] text-[30px]">{{$product->title}}</h1>
            <span class="font-montSemiBold">{{$product->city}}</span>
        </div>
        <div class="product-content">
            {!!$product->content!!}
        </div>
    </div>
</div>
@endsection