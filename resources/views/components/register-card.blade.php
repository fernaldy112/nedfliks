<section class="w-full bg-black bg-opacity-75 rounded-lg sm:max-w-md" >
    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
        <h1 class="text-xl font-bold leading-tight tracking-tight text-white md:text-2xl ">
            Sign Up
        </h1>
        <form class="space-y-4 md:space-y-6" action="/register" method="POST">
            @csrf
            <div>
                <input type="text" name="nedfliks-username" id="nedfliks-username" placeholder="Username" value="{{ old('nedfliks-username') }}" class="bg-zinc-700 text-white sm:text-sm rounded-lg block w-full p-2.5">
                @error('nedfliks-username')
                    <p class="pl-1.5 pt-1 text-xs text-orange-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <input type="text" name="nedfliks-email" id="nedfliks-email" placeholder="Email" value="{{ old('nedfliks-email') }}" class="bg-zinc-700 text-white sm:text-sm rounded-lg block w-full p-2.5">
                @error('nedfliks-email')
                    <p class="pl-1.5 pt-1 text-xs text-orange-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <input type="password" name="nedfliks-password" id="nedfliks-password" placeholder="Password" class="bg-zinc-700 text-white sm:text-sm rounded-lg block w-full p-2.5">
                @error('nedfliks-password')
                    <p class="pl-1.5 pt-1 text-xs text-orange-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <input type="password" name="nedfliks-password_confirmation" id="nedfliks-password_confirmation" placeholder="Password Confirmation" class="bg-zinc-700 text-white sm:text-sm rounded-lg block w-full p-2.5">
                @error('nedfliks-password_confirmation')
                    <p class="pl-1.5 pt-1 text-xs text-orange-500">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="w-full text-white bg-netflix-red focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign up</button>
            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                Already have an account? <a href="/login" class="font-medium text-white hover:underline">Sign in</a>.
            </p>
        </form>
    </div>
</section>