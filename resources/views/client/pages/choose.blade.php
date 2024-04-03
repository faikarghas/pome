@extends('client/components/layout.index')
@section('meta-tag')
<title></title>
<meta name="description" content="meta description">
@endsection

@section('main')
<div class="bg-top-choose p-8 lg:py-16 text-center ">
    <h3 class="text-white capitalize tracking-widest text-2xl lg:text-3xl">palm Oil Mill Effluent</h3>
</div>
<div class="bg-[#FAFAFA] flex flex-wrap py-20 px-[30px] lg:px-32">
    <div class="w-full lg:w-1/2 mb-14 lg:mb-0">
        <img src="{{asset('/images/fome.png')}}"/>
    </div>
    <div class="w-full lg:w-1/2">
        <h2 class="text-[30px] text-[#444444] uppercase mb-4">why you should<br/> choose us:</h2>
        <ul class="list-disc pl-6 lg:pl-8 mb-12">
            <li class="font-montRegular mb-4">We deal directly with over 100 CPO mills to ensure authenticity of the product and traceability of the POME for sustainability compliances. </li>
            <li class="font-montRegular mb-4">We extract the POME from the ponds to ensure quality control. </li>
            <li class="font-montRegular mb-4">We guarantee on-time delivery since we strive for excellent processing and aim for the best quality.  </li>
            <li class="font-montRegular mb-4">We have built networks all over Indonesia and Asia Pacific to increase supplies. </li>
        </ul>
        <div class="flex flex-wrap">
            <div class="w-full lg:w-1/2 flex items-center mb-6 lg:mb-4">
                <img src="{{asset('images/established-g.png')}}" class="mr-6"/>
                <div>
                    <p class="font-montserratRegular text-[15px]">Established in</p>
                    <p class="font-montserratMedium text-[15px]">2022</p>
                </div>
            </div>

            <div class="w-full lg:w-1/2 flex items-center mb-6 lg:mb-4">
                <img src="{{asset('images/established-g.png')}}" class="mr-6"/>
                <div>
                    <p class="font-montserratRegular text-[15px]">45+</p>
                    <p class="font-montserratMedium text-[15px]">Market Coverage</p>
                </div>
            </div>

            <div class="w-full lg:w-1/2 flex items-center mb-6 lg:mb-4">
                <img src="{{asset('images/established-g.png')}}" class="mr-6"/>
                <div>
                    <p class="font-montserratRegular text-[15px]">Located in</p>
                    <p class="font-montserratMedium text-[15px]">Jakarta & Lampung</p>
                </div>
            </div>

            <div class="w-full lg:w-1/2 flex items-center mb-6 lg:mb-4">
                <img src="{{asset('images/established-g.png')}}" class="mr-6"/>
                <div>
                    <p class="font-montserratRegular text-[15px]">100+</p>
                    <p class="font-montserratMedium text-[15px]">of Employees</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="py-20 overflow-hidden">
    <div class="text-center mb-10 flex justify-center">
        <div class="lg:w-[40%] p-8 lg:p-0">
            <h2 class="text-[#FD8C05] text-3xl text-center mb-4 capitalize">Plant Tour (photo gallery)</h2>
            <p class="text-base text-center text-[#444444]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>

    <div class="swiper tranding-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide tranding-slide">
                <div class="tranding-slide-img">
                    <img src="{{ asset('images/gallery1.png') }}" alt="Tranding">
                </div>
            </div>
            <div class="swiper-slide tranding-slide">
                <div class="tranding-slide-img">
                    <img src="{{ asset('images/gallery1.png') }}" alt="Tranding">
                </div>
            </div>
            <div class="swiper-slide tranding-slide">
                <div class="tranding-slide-img">
                    <img src="{{ asset('images/gallery1.png') }}" alt="Tranding">
                </div>
            </div>
            <div class="swiper-slide tranding-slide">
                <div class="tranding-slide-img">
                    <img src="{{ asset('images/gallery1.png') }}" alt="Tranding">
                </div>
            </div>
            <div class="swiper-slide tranding-slide">
                <div class="tranding-slide-img">
                    <img src="{{ asset('images/gallery1.png') }}" alt="Tranding">
                </div>
            </div>
            <div class="swiper-slide tranding-slide">
                <div class="tranding-slide-img">
                    <img src="{{ asset('images/gallery1.png') }}" alt="Tranding">
                </div>
            </div>
            <div class="swiper-slide tranding-slide">
                <div class="tranding-slide-img">
                    <img src="{{ asset('images/gallery1.png') }}" alt="Tranding">
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
</div>
@endsection

@push('javascript-internal')
    <script>

    </script>
@endpush