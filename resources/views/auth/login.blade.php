
@extends('auth.AuthLayout')
@section('title','Login Form')
@section('content')

<section>
    <div class="flex flex-col justify-center min- py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <h2 class="mt-6 text-3xl font-extrabold text-center text-neutral-600">Sign in to your account</h2>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="px-4 py-8 sm:px-10">
                <!-- form action here -->
                <form class="space-y-4 md:space-y-6" action="{{route('login')}}" method="POST">
                @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700"> Email address </label>
                        <div class="mt-1">
                            <input name="email" id="email" type="email" autocomplete="email"  class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                        </div>
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700"> Password </label>
                        <div class="mt-1">
                            <input name="password" id="password" type="password" autocomplete="current-password"  class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="flex items-center justify-center w-full px-10 py-4 text-base font-medium text-center text-white transition duration-500 my-1 ease-in-out transform bg-indigo-600 rounded-xl hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">Login</button>
                        <a href="/register" class="block text-sm w-full text-center bg-transparent border border-indigo-600 mt-4 py-2 rounded-2xl text-indigo-600 font-semibold my-2">Create Account</a>

                        <div>
                        @if(Session::has('error'))
                        <div class="text-red-600 text-center">
                            {{Session::get('error')}}
                        </div>
                        @endif
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>    
@endsection