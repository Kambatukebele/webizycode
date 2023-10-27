@section('title', 'Contact - view')
<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('All Contacts') }}
    </h2>
  </x-slot>
  <!--Session Message -->

  <section class="w-full relative">
    <div class="block w-[90%] mx-auto sm:w-[600px] lg:w-[700px]">
      <div method="post" action="{{ route('contact.store') }}"
        class="mt-6 space-y-6 sm:bg-white sm:w-[500px] sm:p-10 sm:rounded-lg sm:shadow-lg  sm:mx-auto lg:w-[600px]">
        <div
          class="border-gray-300 mt-1 block focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
          name="content" id="content" rows="10">
          Name : {{ $contact->name }}
        </div>
        <div
          class="border-gray-300 mt-1 block focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
          name="content" id="content" rows="10">
          Email : {{ $contact->email }}
        </div>
        <div
          class="border-gray-300 mt-1 block focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
          name="content" id="content" rows="10">
          Company : {{ $contact->company }}
        </div>
        <div
          class="border-gray-300 mt-1 block focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
          name="content" id="content" rows="10">
          Content: <br> {{ $contact->content }}
        </div>
      </div>
    </div>

  </section>

</x-app-layout>