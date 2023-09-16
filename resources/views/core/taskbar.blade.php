<nav class="flex flex-row text-left justify-center py-4 px-6 bg-opacity-25 bg-gray-100 items-baseline w-full shadow-sm transition duration-500">
    <ul class="navbar-nav inline-flex">
        <li class="nav-item opacity-100 mx-4">
            <a class="opacity-100 nav-link text-2xl font-semibold active:text-black  {{ Request::is('/') ? 'text-black' : ' text-gray-500 hover:text-gray-700' }} "
                href="/">Home</a>
        </li>
        <li class="nav-item opacity-100 mx-4">
            <a class="opacity-100 nav-link text-2xl font-semibold active:text-black  {{ Request::is('photos*') ? 'text-black' : ' text-gray-500 hover:text-gray-700' }} "
                href="/photos">Photos</a>
        </li>
    </ul>
</nav>