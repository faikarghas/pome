@extends('client/components/layout.index')
@section('meta-tag')
<title></title>
<meta name="description" content="meta description">
@endsection

@section('main')
<div class="relative">
    <img src="{{asset("/images/from-tropical-palm-crown.jpg")}}" class="w-full h-screen object-cover"/>
    <div class="absolute bottom-20 p-8 lg:p-0 left-0 lg:left-32 lg:w-[40%]">
        <h1 class="font-extrabold text-[30px] lg:text-[40px] text-pome-black uppercase leading-[48.76px] mb-6">CREATING WISDOM through OUR WASTE</h1>
        <p class="text-pome-black text-base lg:w-[60%] mb-6">We aim to prove that our role in advancing the economy through oil waste management brings long-term sustainability to the environment for a better quality of life. </p>
        
        <a class="border-pome-black border rounded-full py-2 px-5 inline-flex items-center"><span class="text-pome-black leading-none text-xs">Find out more ></span></a>
    </div>
</div>

<div class="flex flex-col justify-center items-center px-[30px] lg:px-32 py-20 bg-[#FAFAFA]">
    <div class="w-full lg:w-[40%] mb-9 p-8 lg:p-0">
        <h2 class="capitalize font-extrabold text-3xl text-pome-black text-center mb-4">in a nutshell</h2>
        <p class="text-pome-black text-base text-center">PT Surya Golden Energy is a national company who began accommodating used crude palm oil in 2004 and has now shifted its focus to supplying palm oil mill effluent as an energy source.</p>
    </div>
    <div class="flex flex-wrap gap-8 justify-center">
        <div class="w-[215px] h-[180px] bg-white rounded-tr-[50px] rounded-bl-[50px] bs1 py-8 px-10 flex flex-col items-center justify-between">
            <div>
                <img src="{{asset('/images/establish.png')}}" class="mx-auto w-[50px] h-[60px] object-contain"/>
            </div>
            <div class="text-center">
                <p class="text-[14px] leading-none">Established in</p>
                <span class="text-[14px] font-bold">2022</span>
            </div>
        </div>

        <div class="w-[215px] h-[180px] bg-white rounded-tr-[50px] rounded-bl-[50px] bs1 py-8 px-10 flex flex-col items-center justify-between">
            <div>
                <img src="{{asset('/images/location.png')}}" class="mx-auto h-[60px] object-contain"/>
            </div>
            <div class="text-center">
                <p class="text-[14px] leading-none">Located in</p>
                <span class="text-[14px] font-bold">Jakarta & Lampung</span>
            </div>
        </div>

        <div class="w-[215px] h-[180px] bg-white rounded-tr-[50px] rounded-bl-[50px] bs1 py-8 px-10 flex flex-col items-center justify-between">
            <img src="{{asset('/images/piechart.png')}}" class="mx-auto h-[60px] object-contain"/>
            <div class="text-center">
                <p class="text-[14px] leading-none font-bold">Established in</p>
                <span class="text-[14px]">Market Coverage</span>
            </div>
        </div>

        <div class="w-[215px] h-[180px] bg-white rounded-tr-[50px] rounded-bl-[50px] bs1 py-8 px-10 flex flex-col items-center justify-between">
            <img src="{{asset('/images/employee.png')}}" class="mx-auto h-[60px] object-contain"/>
            <div class="text-center">
                <p class="text-[14px] leading-none font-bold">100+</p>
                <span class="text-[14px]">Employees</span>
            </div>
        </div>

        <div class="w-[215px] h-[180px] bg-white rounded-tr-[50px] rounded-bl-[50px] bs1 py-8 px-10 flex flex-col items-center justify-between">
            <img src="{{asset('/images/production.png')}}" class="mx-auto h-[60px] object-contain"/>
            <div class="text-center">
                <p class="text-[14px] leading-none font-bold">2500+</p>
                <span class="text-[14px]">Production Capacity</span>
            </div>
        </div>
        
    </div>
</div>

<div class="flex flex-wrap px-[30px] lg:px-32 py-20 bg-[#EFEFEF]">
    <div class="w-full lg:w-1/2 flex items-center mb-8 lg:mb-0">
        <div>
            <h2 class="font-extrabold text-pome-black text-3xl mb-4">Our Certifications</h2>
            <p class="text-pome-black text-base">We ensure that the business we run is recognized by leading international certification bodies that support the movement to reduce greenhouse gas emissions, protect the natural environment and social sustainability.</p>
        </div>
    </div>
    <div class="flex items-center w-1/2 justify-center gap-8">
        <div><img src="{{asset('/images/iscc.png')}}"/></div>
        <div><img src="{{asset('/images/ins.png')}}"/></div>
    </div>
</div>

<div class="py-20 overflow-hidden">
    <div class="text-center mb-10 flex justify-center p-8 lg:p-0">
        <div class="lg:w-[40%]">
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
        {{-- <div class="swiper-button-next"></div> --}}
        {{-- <div class="swiper-button-prev"></div> --}}
    </div>
</div>

<div class="px-[30px] lg:px-32 py-20 bg-[#EFEFEF]">
    <div class="mb-9">
        <h2 class="text-[30px] text-[#FD8C05] font-montserratExtraBold">Product Highlight overview</h2>
    </div>
    <div class="flex flex-wrap justify-between">
        <div class="w-full lg:w-[22%] bg-white rounded-tr-[50px] rounded-bl-[50px] bs1 flex flex-col items-center justify-between mb-8">
            <div class="h-[170px] w-full">
                <img src="{{asset('/images/highlight1.png')}}" class="mx-auto w-full h-full object-cover rounded-tr-[50px] rounded-bl-[50px]"/>
            </div>
            <div class="h-[160px] w-full px-8 py-6">
                <p class="text-[14px] font-montserratExtraBold leading-tight tracking-widest">Biodiessel <br/>Glycerin (Soap)</p>
            </div>
        </div>

        <div class="w-full lg:w-[22%] bg-white rounded-tr-[50px] rounded-bl-[50px] bs1 flex flex-col items-center justify-between mb-8">
            <div class="h-[170px] w-full">
                <img src="{{asset('/images/highlight2.png')}}" class="mx-auto w-full h-full object-cover rounded-tr-[50px] rounded-bl-[50px]"/>
            </div>
            <div class="h-[160px] w-full px-8 py-6">
                <p class="text-[14px] font-montserratExtraBold leading-tight tracking-widest">RBD Olein  (Cooking Oil) <br/>
                    Biodiesel<br/>
                    PFAD<br/>
                    Stearin<br/>
                    Glycerin</p>
            </div>
        </div>

        <div class="w-full lg:w-[22%] bg-white rounded-tr-[50px] rounded-bl-[50px] bs1 flex flex-col items-center justify-between mb-8">
            <div class="h-[170px] w-full">
                <img src="{{asset('/images/highlight3.png')}}" class="mx-auto w-full h-full object-cover rounded-tr-[50px] rounded-bl-[50px]"/>
            </div>
            <div class="h-[160px] w-full px-8 py-6">
                <p class="text-[14px] font-montserratExtraBold leading-tight tracking-widest">BioPalm Kernel Oil (PKO)<br/>
                    Margarines<br/>
                    Animal Feed<br/>
                    Soap & Detergent<br/>
                    Cosmetics</p>
            </div>
        </div>

        <div class="w-full lg:w-[22%] bg-white rounded-tr-[50px] rounded-bl-[50px] bs1 flex flex-col items-center justify-between mb-8">
            <div class="h-[170px] w-full">
                <img src="{{asset('/images/highlight1.png')}}" class="mx-auto w-full h-full object-cover rounded-tr-[50px] rounded-bl-[50px]"/>
            </div>
            <div class="h-[160px] w-full px-8 py-6">
                <p class="text-[14px] font-montserratExtraBold leading-tight tracking-widest">Bio Mass</p>
            </div>
        </div>

       
    </div>
</div>

<div class="px-[30px] lg:px-60 py-20 bg-[#FD8C05] relative lg:h-[700px] flex items-center">
    <div class="bg-white rounded-tr-[50px] rounded-bl-[50px] relative z-10 flex flex-wrap overflow-hidden bs1">
        <div class="p-16 w-full lg:w-[40%]">
            <h2 class="text-[#FD8C05] text-[30px] mb-9">Contact Us</h2>
            <ul>
                <li class="flex items-start mb-3">
                    <img src="{{asset('/images/loc.png')}}" class="object-contain w-[20px] mr-6"/>
                    <div>
                        <p class="text-[#444444] text-sm mb-2 tracking-widest font-montserratRegular">Contact Us: <br/>AKR Tower #16A Jl<br/> Panjang No. 5 Kebon Jeruk, Jakarta Barat 11530</p>
                        <p class="text-[#444444] text-sm tracking-widest font-montserratRegular">admin@sgolden.co </p>
                    </div>
                </li>
                <li class="flex items-start">
                    <img src="{{asset('/images/phone.png')}}" class="object-contain w-[20px] mr-6"/>
                    <div>
                        <p class="text-[#444444] text-sm tracking-widest font-montserratRegular">Telp : (+62) 8117251888</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="p-16 w-full lg:w-[60%] bg-[#EFEFEF]">
            <h5 class="text-[#444444] mb-6">Interested in becoming the agent of <br/>sustainable energy? Hit us up here:</h5>

            <form method="POST" action="{{ route('postContact') }}">
                @csrf
                <div class="mb-2">
                    <input placeholder="Name" name="name" class="pl-0 w-full bg-transparent border-t-0 border-l-0 border-r-0 border-b border-[#444444]"/>
                </div>
                <div class="mb-2">
                    <input placeholder="Email" name="email" class="pl-0 w-full bg-transparent border-t-0 border-l-0 border-r-0 border-b border-[#444444]"/>
                </div>
                <div class="mb-2">
                    <textarea rows="5" placeholder="Message" name="message" class="pl-0 w-full bg-transparent border-t-0 border-l-0 border-r-0 border-b border-[#444444]"></textarea>
                </div>
                <button type="submit">submit</button>
            </form>
        </div>
    </div>
    <img src="{{asset('/images/green-coconuts-hanging-from-palm-tree.png')}}" class="absolute right-0 top-0 z-0 h-full"/>
</div>
@endsection