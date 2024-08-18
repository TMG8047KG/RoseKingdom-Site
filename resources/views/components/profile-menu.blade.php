<div x-data="{ profile : false }" @click.away="profile=falseda" class="mr-2">
    <button @click="profile = ! profile" type="button" class="flex text-sm bg-transparent text-gray-400 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
        <span class="sr-only">Open user menu</span>
        <img class="h-8 w-8 rounded-full" src="images/profile_template.png" alt="Account Image">
{{--        <svg viewBox="0 0 20 20" fill="currentColor" class="h-6 w-6">--}}
{{--            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--                <g id="Dribbble-Light-Preview" transform="translate(-140.000000, -2159.000000)" fill="#000000">--}}
{{--                    <g id="icons" transform="translate(56.000000, 160.000000)">--}}
{{--                        <path d="M100.562548,2016.99998 L87.4381713,2016.99998 C86.7317804,2016.99998 86.2101535,2016.30298 86.4765813,2015.66198 C87.7127655,2012.69798 90.6169306,2010.99998 93.9998492,2010.99998 C97.3837885,2010.99998 100.287954,2012.69798 101.524138,2015.66198 C101.790566,2016.30298 101.268939,2016.99998 100.562548,2016.99998 M89.9166645,2004.99998 C89.9166645,2002.79398 91.7489936,2000.99998 93.9998492,2000.99998 C96.2517256,2000.99998 98.0830339,2002.79398 98.0830339,2004.99998 C98.0830339,2007.20598 96.2517256,2008.99998 93.9998492,2008.99998 C91.7489936,2008.99998 89.9166645,2007.20598 89.9166645,2004.99998 M103.955674,2016.63598 C103.213556,2013.27698 100.892265,2010.79798 97.837022,2009.67298 C99.4560048,2008.39598 100.400241,2006.33098 100.053171,2004.06998 C99.6509769,2001.44698 97.4235996,1999.34798 94.7348224,1999.04198 C91.0232075,1998.61898 87.8750721,2001.44898 87.8750721,2004.99998 C87.8750721,2006.88998 88.7692896,2008.57398 90.1636971,2009.67298 C87.1074334,2010.79798 84.7871636,2013.27698 84.044024,2016.63598 C83.7745338,2017.85698 84.7789973,2018.99998 86.0539717,2018.99998 L101.945727,2018.99998 C103.221722,2018.99998 104.226185,2017.85698 103.955674,2016.63598" id="profile_round-[#1342]"></path>--}}
{{--                    </g>--}}
{{--                </g>--}}
{{--            </g>--}}
{{--        </svg>--}}

    </button>
    <!-- Dropdown menu -->
    <div x-show="profile" class="absolute right-1 z-50 my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
        <div class="px-4 py-3">
            @guest
                <span class="block text-sm text-gray-900 dark:text-white">You're in a guest view</span>
                <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">Sign-up or Log-in for full access</span>
            @endguest
            @auth
                <span class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->username }}</span>
            @endauth
        </div>
        <ul class="py-2" aria-labelledby="user-menu-button">
            @guest
                <x-profile-option route="register">Sign up</x-profile-option>
                <x-profile-option route="login">Login</x-profile-option>
            @endguest
            @auth
                <x-profile-option route="home">Options (Coming soon)</x-profile-option>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Logout</button>
                </form>
            @endauth
        </ul>
    </div>
</div>
