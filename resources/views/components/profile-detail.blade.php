<section class="w-full h-screen-70 flex justify-center items-center">
    <div class="flex flex-col lg:flex-row w-1/2">
        <img src="{{ $user["profile_picture_url"] }}" alt="" class="w-4/5 sm:w-1/2 lg:w-1/3 self-center">
        <div class="text-center mt-2 sm:mt-4 lg:w-2/3 lg:ms-4 lg:text-left lg:mt-0">
            <p class="text-white text-md sm:text-xl md:text-3xl font-semibold mb-2">Profile</p>
            <p class="text-white text-xs md:text-sm">Username: {{ $user["username"] }}</p>
            <p class="text-white text-xs md:text-sm">Email: {{ $user["email"] }}</p>
            <p class="text-white text-xs md:text-sm">Password: <a href="/change_password" class="underline text-sky-500">Change Password</a></p>
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="w-40 text-white bg-netflix-red focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mt-4">Log out</button>
            </form>
        </div>
    </div>
</section>