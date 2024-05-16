<header class="px-[30px] lg:px-32 bg-header border-b border-[#444444] {{ Request::is('/') ? 'fixed top-0 left-0 w-full z-40' : '' }}">
   <nav class="hidden lg:flex items-end justify-between w-full ">
      <div><span class="uppercase block text-lg font-black tracking-widest py-10 text-[#444444]">PT Surya Golden Energy</span></div>
      <a href="{{route('home')}}" class="uppercase block text-[15px] font-montSemiBold tracking-widest py-10 text-[#444444]">HOME</a>
      <a href="{{route('profile')}}" class="uppercase block text-[15px] font-montSemiBold tracking-widest py-10 text-[#444444]">Our Profile</a>
      <a href="{{route('choose')}}" class="uppercase block text-[15px] font-montSemiBold tracking-widest py-10 text-[#444444]">Why choose us</a>
      <div class="uppercase block text-[15px] font-montSemiBold tracking-widest relative group cursor-pointer py-10 text-[#444444]">
         Product & services
         <div class="absolute top-[calc(22px+5rem)] left-[-50%] p-10 bg-white w-[400px] hidden group-hover:block z-50">
            @foreach ($listProduct as $row)
               <a href={{route('product',$row->slug)}} class="block mb-4 text-xs text-[#444444] font-montSemiBold">{{$row->title}}</a>
            @endforeach
         </div>
      </div>
   </nav>

   <nav class="flex justify-between items-center lg:hidden bg-white fixed left-0 top-0 w-full h-[88px] px-8 bs z-40">
      <span class="uppercase block text-xs font-black tracking-widest leading-none text-[#444444]">PT Surya Golden Energy</span>
      <div class="navbar-action w-[40px] h-[22px] relative">
         <div class="bg-black h-[2px] w-full absolute top-0"></div>
         <div class="bg-black h-[2px] w-full absolute top-[calc(50%-2px)]"></div>
         <div class="bg-black h-[2px] w-full absolute bottom-0"></div>
      </div>
   </nav>

   <div class="fixed top-[88px] left-[-100%] bg-white w-full h-full px-[30px] navbar z-40">
      <div>
         <a href="{{route('home')}}" class="uppercase block text-base font-montSemiBold tracking-widest py-4 text-[#444444]">HOME</a>
         <a href="{{route('profile')}}" class="uppercase block text-base font-montSemiBold tracking-widest py-4 text-[#444444]">Our Profile</a>
         <a href="{{route('choose')}}" class="uppercase block text-base font-montSemiBold tracking-widest py-4 text-[#444444]">Why choose us</a>
         <div>
            <div class="uppercase block text-base font-montSemiBold tracking-widest relative cursor-pointer pt-4 sub-action pb-6 text-[#444444]"> Product & services </div>
            <div class=" bg-white w-[300px] hidden z-50 sub-nav">
               @foreach ($listProduct as $row)
                  <a href={{route('product',$row->slug)}} class="border-b pb-2 block mb-4 text-base text-[#444444] font-montSemiBold">{{$row->title}}</a>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</header>