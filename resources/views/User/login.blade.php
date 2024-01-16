@include('partials.__header')
<header class = "max-w-lg mx-auto">

    <a href="/">
        <h1 class = "text-4x1 font-bold text-black text-center">
            No Account? Register here!
        </h1>
    </a>    


</header>

<main class="bg-black max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2x1">

    <section>
        <h3 class="text-white font-bold text-2x1">
            Welcome to the login
        </h3>    

        <p class="text-white pt-2">
            Sign into your account
        </p>
    </section> 

    <section class="mt-10">

        <form action="login/process" method="POST" class="flex flex-col">
            @csrf
            @error('email')
                <p class="text-red-500 text-xs mt-2 p-1">
                    {{$message}}
                </p>
                @enderror
            <div class="mb-6 pt-3 rounded bg-white">
                <label for="email" class="label block text-black text-sm font-bold mb-3 ml-3">
                    Email
                </label>
                <input type="email" name="email" class="bg-white rounded w-full text-black focus:outline-none border-b-4 border-blue-500 px-2">
            </div>

            <div class="mb-6 pt-3 rounded bg-white">
                <label for="password" class="label block text-black text-sm font-bold mb-3 ml-3">
                    Password
                </label>
                <input type="password" name="password" class="bg-white rounded w-full text-black focus:outline-none border-b-4 border-blue-500 px-2">
            </div>
            <button class="bg-blue-300 hover:bg-blue-500 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transitionduration-200"
            type="submit">
            Login
            </button>
        </form>

    </section>

</main>

@include('partials.__footer')