<a href="{{ route($route) }}"
    class="border-b-4 flex items-center {{ request()->route()->getName() == $route ? 'bg-blue-50 text-blue-500 border-sky-500' : 'text-slate-400' }}  px-3 h-full transition duration-300 ease-in-out hover:text-sky-500 hover:border-sky-500 hover:bg-sky-50">
    {{ $name }}
</a>
