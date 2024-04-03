@extends('client/components/layout.index')
@section('meta-tag')
<title></title>
<meta name="description" content="meta description">
@endsection

@section('main')
  <div class="p-[60px]">
    <div class="flex flex-wrap px-20">
        <div class="w-2/5 pr-10">
            <h1 class="text-4xl text-[#232321] font-extrabold mb-3">Register</h1>
            <p class="text-[#232321] text-[20px] font-extrabold mb-6">Sign up with</p>

            <div class="flex flex-wrap justify-between">
                <a href="{{ route('google.redirect') }}" class="border border-[#232321] py-3.5 px-8 rounded-xl w-[30%] flex justify-center">@include('client/components/svg.googleLogo')</a>
                <a class="border border-[#232321] py-3.5 px-8 rounded-xl w-[30%] flex justify-center">@include('client/components/svg.appleLogo')</a>
                <a href="{{ route('facebook.redirect') }}" class="border border-[#232321] py-3.5 px-8 rounded-xl w-[30%] flex justify-center">@include('client/components/svg.facebookLogo')</a>
            </div>

            <div class="my-6"><span class="text-xl text-[#232321] font-extrabold">OR</span></div>

            <div>
                <div>
                    <form method="POST" action="{{ route('storeRegister') }}">
                        @csrf
                        <div class="mb-4">
                            <label class="text-[24px] font-[#232321] font-bold mb-4 block">Your Name</label>
                            <div class="mb-4">
                                <input name="firstName" type="text" placeholder="First Name" class="border-[#232321] w-full rounded-lg"/>
                                @error('firstName')
                                    <span class="text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <input name="lastName" type="text" placeholder="Last Name" class="border-[#232321] w-full rounded-lg"/>
                                @error('lastName')
                                    <span class="text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="text-[24px] font-[#232321] font-bold mb-4 block">Gender</label>
                            <div class="flex gap-4">
                                <div>
                                    <input type="radio" id="male" name="gender" value="Male">
                                    <label class="text-[#232321] text-base font-extrabold" for="male">Male</label><br>
                                </div>
                                <div>
                                    <input type="radio" id="female" name="gender" value="Female">
                                    <label class="text-[#232321] text-base font-extrabold" for="female">Female</label><br>
                                </div>
                            </div>
                            @error('gender')
                                <span class="text-red-600">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="text-[24px] font-[#232321] font-bold mb-4 block">Login Details</label>
                            <div class="mb-4">
                                <input name="email" type="email" placeholder="Email" class="border-[#232321] w-full rounded-lg"/>
                                @error('email')
                                    <span class="text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <input name="password" type="password" placeholder="Password" class="border-[#232321] w-full rounded-lg mb-2"/>
                                <span class="block text-xs text-[#36323B] leading-4">Minimum 8 characters with at least one uppercase, one lowercase, one special character and a number.</span>
                                @error('password')
                                    <span class="text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-4"></div>

                        <button class="bg-[#232321] py-3 px-4 rounded-lg font-black cursor-pointer text-white w-full text-left">Register</button>
                        
                    </form>
                </div>
            </div>

            
        </div>
        <div class="w-3/5">
            <div class="bg-[#FAFAFA] p-8 rounded-2xl ">
                <div class="mb-10">
                    <h2 class="text-4xl text-[#232321] font-extrabold mb-6">Register to Get Rewarded Today.</h2>
                    <p class="text-[#232321] mb-6">As ONFLD member you get rewarded with what you love for doing what you love. Sign up today and receive immediate access to these benefits:</p>
                    <ul class="mb-6">
                        <li>Free shipping​</li>
                        <li>A 20% off voucher for your next purchase​</li>
                        <li>Access to Members Only products and sales​</li>
                        <li>Special offers and promotions​</li>
                    </ul>
                    <p class="text-[#232321]">Already a member?</p>
                </div>
                <div class="bg-[#232321] py-3 px-4 rounded-lg font-black cursor-pointer"><a class="text-white">Login</a></div>
            </div>
        </div>
    </div>
  </div>

    @if (session()->has('success'))
        <div id="success-message" class="alert alert-success fixed right-0 bottom-0 bg-green-500 px-10 py-3 text-white rounded-t-lg">
            {{ session('success') }}
        </div>
    @endif
@endsection