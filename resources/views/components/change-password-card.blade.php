<section class="w-full bg-black bg-opacity-75 rounded-lg sm:max-w-md" >
    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
        <h1 class="text-xl font-bold leading-tight tracking-tight text-white md:text-2xl ">
            Change Password
        </h1>
        <form class="space-y-4 md:space-y-6" action="/change_password" method="POST">
            @csrf
            <div>
                <input type="text" name="nedfliks-email" id="nedfliks-email" placeholder="Email" value="{{ old('nedfliks-email') }}" class="bg-zinc-700 text-white sm:text-sm rounded-lg block w-full p-2.5">
                @error('nedfliks-email')
                    <p class="pl-1.5 pt-1 text-xs text-orange-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <input type="password" name="nedfliks-old-password" id="nedfliks-old-password" placeholder="Old Password" class="bg-zinc-700 text-white sm:text-sm rounded-lg block w-full p-2.5">
                @error('nedfliks-old-password')
                    <p class="pl-1.5 pt-1 text-xs text-orange-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <input type="password" name="nedfliks-new-password" id="nedfliks-new-password" placeholder="New Password" class="bg-zinc-700 text-white sm:text-sm rounded-lg block w-full p-2.5">
                @error('nedfliks-new-password')
                    <p class="pl-1.5 pt-1 text-xs text-orange-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <input type="password" name="nedfliks-new-password_confirmation" id="nedfliks-new-password_confirmation" placeholder="New Password Confirmation" class="bg-zinc-700 text-white sm:text-sm rounded-lg block w-full p-2.5">
                @error('nedfliks-new-password_confirmation')
                    <p class="pl-1.5 pt-1 text-xs text-orange-500">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="w-full text-white bg-netflix-red focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Change</button>
        </form>
        <form class="!m-0" action="/profile" method="GET">
            <button type="submit" class="w-full !mt-4 text-white bg-gray-500 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Back to profile page</button>
        </form>
    </div>
</section>