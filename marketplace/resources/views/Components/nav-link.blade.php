@props(['active' => false])

<a class="{{ $active ? 'bg-gray-700 text-white' : 'text-gray-300 hover:text-black' }} rounded-md px-3 py-2 text-sm font-medium" 
   aria-current="{{ $active ? 'page' : 'false' }}"
   {{ $attributes }}>
   {{ $slot }}
</a>
