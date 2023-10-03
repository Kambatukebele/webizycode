<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('All subscribers') }}
    </h2>
  </x-slot>
  <!--Session Message -->
  @if (session('status'))
  <script>
    alert("{{ session('status') }}")
  </script>
  @endif
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 flex justify-between items-center text-gray-900">
          <div class="w-full relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
              <thead class="text-xs text-gray-700 uppercase bg-red-50 dark:bg-gray-700 dark:text-gray-400 ">
                <tr class="border">
                  <th scope="col" class="px-6 py-3 border text-center">
                    Email
                  </th>
                  <th scope="col" class="px-6 py-3 border text-center lg:w-[250px]">
                    Action
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($subscribers as $subscriber)
                <tr
                  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                  <th scope="row"
                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                    {{ $subscriber->email }}
                  </th>
                  <td class="px-6 py-4 border text-center lg:flex lg:justify-evenly lg:items-center">
                    <form method="post" action="{{ route('subscribe.destroy', ['id' => $subscriber->id]) }}">
                      @csrf
                      @method('delete')
                      <button class="py-2 w-[90px] bg-red-800 text-white rounded-md">Delete</button>
                    </form>

                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <nav class="flex items-center justify-between pt-4 px-3" aria-label="Table navigation">
              <span class="text-sm font-normal text-gray-500 dark:text-gray-400">{{ $subscribers->links() }}</span>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>

</x-app-layout>