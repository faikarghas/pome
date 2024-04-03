@extends('client/components/layout.index')
@section('meta-tag')
<title></title>
<meta name="description" content="meta description">
@endsection

@section('main')
<div class="bg-white single-item mt-[88px] lg:mt-0">
   <div class="h-[calc(120vh)] lg:h-[calc(100vh-108.8px)] relative"> 
        <img src="{{asset('images/profile/from-tropical-palm-crown-landscape-1.png')}}" class="object-cover w-full h-full "/>
        <div class="absolute top-0 left-0 z-20 profile-det-img-section w-full h-full"></div>
        <div class="absolute top-0 left-0 z-30 w-full h-full px-[30px] lg:px-32 py-20 flex justify-start flex-col">
            <h2 class="text-3xl lg:text-[50px] text-white group-hover:text-white font-montserratExtraBold mb-9 uppercase leading-tight">Vision & Mission</h2>
            <div class="flex flex-wrap">
                <div class="lg:pl-24 profile-content w-full lg:w-1/2 mb-8 lg:mb-0">
                    <h4 class="uppercase">Vision</h4>
                    <p class="text-white font-montRegular">To encourage the implementation of sustainable energy measures, especially the use of Palm Oil Mill Effluent waste as part of the solution to achieve energy autonomy. </p>
                    <br/>
                    <h4 class="uppercase">MISSION</h4>
                    <ul class="list-item pl-8">
                        <li class="text-white font-montRegular list-disc">Supporting sustainable energy as a major player in the country's economic development as well as environmental preservation;</li>
                        <li class="text-white">Ensure that the processing of liquid palm oil waste that we collect is carried out wisely and efficiently;</li>
                        <li>Constantly evaluate the possibilities for new sustainable energy solutions in collaboration with domestic and international stakeholders to diversify and complete our current portfolio of sustainable energy programs. </li>
                    </ul>
                </div>
                <div class="flex lg:justify-end w-full lg:w-1/2">
                    <div class="w-[268px] h-[268px] relative">
                        <img src="{{asset('images/profile/csp1.png')}}" class="object-cover w-full h-full"/>
                        <img src="{{asset('images/arrow-r-p.png')}}" class="object-contain absolute top-[50%] translate-y-[-50%] right-[-22px]"/>
                    </div>
                </div>
            </div>
        </div>
   </div>

   <div class="h-[calc(120vh)] lg:h-[calc(100vh-108.8px)] relative"> 
        <img src="{{asset('images/profile/from-tropical-palm-crown-landscape-2.png')}}" class="object-cover w-full h-full "/>
        <div class="absolute top-0 left-0 z-20 profile-det-img-section w-full h-full"></div>
        <div class="absolute top-0 left-0 z-30 w-full h-full px-[30px] lg:px-32 py-20 flex justify-start flex-col">
            <h2 class="text-3xl lg:text-[50px] text-white group-hover:text-white font-montserratExtraBold mb-9 uppercase leading-tight">our values</h2>
            <div class="flex flex-wrap">
                <div class="lg:pl-24 profile-content w-full lg:w-1/2 mb-8 lg:mb-0">
                    <h4 class="uppercase">ACCOUNTABILITY</h4>
                    <p class="text-white font-montRegular"> We are in charge of carrying out legislation pertaining to sustainable energy.</p>
                    <h4 class="uppercase">GOVERNANCE</h4>
                    <p>We operate with integrity, openness, and transparenc are in charge of carrying out legislation pertaining to sustainable energy.</p>
                    <h4 class="uppercase">EFFICIENCY & COMPETENCE</h4>
                    <p>To efficiently accomplish our goals, we carry out our job in accordance with the client's declared charter.</p>
                </div>
                <div class="flex lg:justify-end w-full lg:w-1/2">
                    <div class="w-[268px] h-[268px] relative">
                        <img src="{{asset('images/profile/csp2.png')}}" class="object-cover w-full h-full"/>
                        <img src="{{asset('images/arrow-r-p.png')}}" class="object-contain absolute top-[50%] translate-y-[-50%] right-[-22px]"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <div class="h-[calc(120vh)] lg:h-[calc(100vh-108.8px)] relative"> 
        <img src="{{asset('images/profile/from-tropical-palm-crown-landscape-3.png')}}" class="object-cover w-full h-full "/>
        <div class="absolute top-0 left-0 z-20 profile-det-img-section w-full h-full"></div>
        <div class="absolute top-0 left-0 z-30 w-full h-full px-[30px] lg:px-32 py-20 flex justify-start flex-col">
            <h2 class="text-3xl lg:text-[50px] text-white group-hover:text-white font-montserratExtraBold mb-9 uppercase leading-tight">COMPANY<br/>STORY</h2>
            <div class="flex flex-wrap ">
                <div class="lg:pl-24 profile-content w-full lg:w-1/2 mb-8 lg:mb-0">
                    <p>It started with our concern about unprocessed palm oil waste which is one of the biggest causes of environmental pollution. Palm Oil Mills Effluent (POME) is liquid waste produced from the sterilization and clarification process of palm oil. This waste is one of the biggest pollutants that can trigger global warming because it produces methane gas if it is not processed. For this reason, we are moved to utilize the contents of this waste as energy raw materials such as biogas.</p>

                    <p>Utilizing biogas itself is a component of renewable energy, which is a government initiative to broaden community access to electricity by utilizing bioenergy and other innovative and renewable energy sources (EBT). Government Number 79 of 2014's National Energy Policy, which aims to have EBT contribute 23% of the country's overall energy mix by 2025, makes this quite explicit.</p> 
                    
                </div>
                <div class="flex lg:justify-end w-full lg:w-1/2">
                    <div class="w-[268px] h-[268px] relative">
                        <img src="{{asset('images/profile/csp3.png')}}" class="object-cover w-full h-full"/>
                        <img src="{{asset('images/arrow-r-p.png')}}" class="object-contain absolute top-[50%] translate-y-[-50%] right-[-22px]"/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="h-[calc(120vh)] lg:h-[calc(100vh-108.8px)] relative"> 
        <img src="{{asset('images/profile/from-tropical-palm-crown-landscape-4.png')}}" class="object-cover w-full h-full "/>
        <div class="absolute top-0 left-0 z-20 profile-det-img-section w-full h-full"></div>
        <div class="absolute top-0 left-0 z-30 w-full h-full px-[30px] lg:px-32 py-20 flex justify-start flex-col">
            <h2 class="text-3xl lg:text-[50px] text-white group-hover:text-white font-montserratExtraBold mb-9 uppercase leading-tight">our<br/>milestone</h2>
            <div class="flex flex-wrap ">
                <div class="lg:pl-24 profile-content w-full lg:w-1/2 mb-8 lg:mb-0">
                    <p>We started our steps in 2004 from the smallest effort, namely collecting palm oil waste and supplying it to national companies producing bar soap. Since then, we have expanded our network from national to international markets, ultimately covering Southeast Asia, India and Africa.</p>

                    <p>In 2022, in connection with the presence of the New and Renewable Energy Bill as a form of strengthening regulations for the development of new and renewable energy in the country, we have decided to focus on collecting palm oil waste to then process it into a bioenergy base.</p> 
                </div>
                <div class="flex lg:justify-end w-full lg:w-1/2">
                    <div class="w-[268px] h-[268px] relative">
                        <img src="{{asset('images/profile/csp4.png')}}" class="object-cover w-full h-full"/>
                        <img src="{{asset('images/arrow-r-p.png')}}" class="object-contain absolute top-[50%] translate-y-[-50%] right-[-22px]"/>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@push('javascript-internal')
    <script>
        $('.single-item').slick({
            arrows:false
        });

        function getQueryParam(paramName) {
            const queryString = window.location.search;
            const urlParams = new URLSearchParams(queryString);
            return urlParams.get(paramName);
        }

        let params = getQueryParam("slider");
        let currentSlider = 0

        if (params) {
            currentSlider = params
        }

         $('.single-item').slick('slickGoTo', currentSlider);
    </script>
@endpush