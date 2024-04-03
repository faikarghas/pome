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

            <div>
                <div>
                    <form method="POST" action="{{ route('storeRegister') }}">
                        @csrf
                        <div class="mb-4">
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
       
    </div>
  </div>

    @if (session()->has('success'))
        <div id="success-message" class="alert alert-success fixed right-0 bottom-0 bg-green-500 px-10 py-3 text-white rounded-t-lg">
            {{ session('success') }}
        </div>
    @endif
@endsection