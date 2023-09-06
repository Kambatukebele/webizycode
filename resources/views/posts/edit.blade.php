<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('All Posts') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 flex justify-between items-center text-gray-900">
          <div class="w-full relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
              <thead class="text-xs text-gray-700 uppercase bg-red-50 dark:bg-gray-700 dark:text-gray-400 ">
                <tr class="border">
                  <th scope="col" class="px-6 py-3 border text-center">
                    Title
                  </th>
                  <th scope="col" class="px-6 py-3 border text-center">
                    Category
                  </th>
                  <th scope="col" class="px-6 py-3 border text-center">
                    Status
                  </th>
                  <th scope="col" class="px-6 py-3 border text-center">
                    Action
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($posts as $post)
                <tr
                  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                  <th scope="row"
                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                    {{ $post->title }}
                  </th>
                  <th scope="row"
                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                    {{ $post->category }}
                  </th>
                  <td class="px-6 py-4 border text-center w-[150px]">
                    @if ($post->status === 'active')
                    <p class="bg-green-600 py-2 w-[90px] rounded-md text-white">{{ $post->status }}</p>
                    @else
                    <p class="bg-yellow-600 py-2 w-[90px] rounded-md text-white ">{{ $post->status }}</p>
                    @endif
                  </td>
                  <td class="px-6 py-4 border text-center">
                    <a href="#">
                      <button class="py-2 w-[90px] bg-blue-800 text-white rounded-md">Edit</button>
                    </a>
                    <a href="#">
                      <button class="py-2 w-[90px] bg-green-800 text-white rounded-md">Activate</button>
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <nav class="flex items-center justify-between pt-4 px-3" aria-label="Table navigation">
              <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Showing <span
                  class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span
                  class="font-semibold text-gray-900 dark:text-white">1000</span></span>
              <ul class="inline-flex -space-x-px text-sm h-8">
                <li>
                  <a href="#"
                    class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                </li>
                <li>
                  <a href="#"
                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                </li>
                <li>
                  <a href="#"
                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                </li>
                <li>
                  <a href="#" aria-current="page"
                    class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                </li>
                <li>
                  <a href="#"
                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                </li>
                <li>
                  <a href="#"
                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                </li>
                <li>
                  <a href="#"
                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>

</x-app-layout>