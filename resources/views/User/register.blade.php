@include('partials.__header')
<header class = "max-w-lg mx-auto">
 <x-messages />
    <a href="/login">
        <h1 class = "text-4x1 font-bold text-black text-center">
           Already have account? Login here!
        </h1>
    </a>    


</header>

<main class="bg-black max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2x1">

    <section>
        <h3 class="text-white font-bold text-2x1">
            Welcome to the Register!
        </h3>    

        <p class="text-white pt-2">
            Sign into your account
        </p>
    </section> 

    <section class="mt-10">
        @csrf
        <form action="/store" method="POST" class="flex flex-col">
            @csrf
            <div class="mb-6 pt-3 rounded bg-white">
                <label for="name" class="label block text-black text-sm font-bold mb-3 ml-3">
                    Name
                </label>
                <input type="text" name="name" class="bg-white rounded w-full text-black focus:outline-none border-b-4 border-blue-500 px-2" value={{old('name')}}>
                    @error('name')
                    <p class="text-red-500 text-xs mt-2 p-1">
                        {{$message}}
                    </p>
                    @enderror
               
            </div>



            <div class="mb-6 pt-3 rounded bg-white">
                <label for="email" class="label block text-black text-sm font-bold mb-3 ml-3">
                    Email
                </label>
                <input type="email" name="email" class="bg-white rounded w-full text-black focus:outline-none border-b-4 border-blue-500 px-2"value={{old('email')}}>
                @error('email')
                <p class="text-red-500 text-xs mt-2 p-1">
                    {{$message}}
                </p>
                @enderror
           
            </div>



            <div class="mb-6 pt-3 rounded bg-white">
                <label for="password" class="label block text-black text-sm font-bold mb-3 ml-3">
                    Password
                </label>
                <input type="password" name="password" class="bg-white rounded w-full text-black focus:outline-none border-b-4 border-blue-500 px-2"value={{old('password')}}>
                @error('password')
                <p class="text-red-500 text-xs mt-2 p-1">
                    {{$message}}
                </p>
                @enderror
           
            </div>



            <div class="mb-6 pt-3 rounded bg-white">
                <label for="password_confirmation" class="label block text-black text-sm font-bold mb-3 ml-3">
                    Confirm password
                </label>
                <input type="password" name="password_confirmation" class="bg-white rounded w-full text-black focus:outline-none border-b-4 border-blue-500 px-2">
                @error('password_confirmation')
                <p class="text-red-500 text-xs mt-2 p-1">
                    {{$message}}
                </p>
                @enderror
           
            </div>


            <button class="bg-blue-300 hover:bg-blue-500 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transitionduration-200" type="submit">
            Sign-up!
            </button>


        </form>

    </section>

</main>

@include('partials.__footer')