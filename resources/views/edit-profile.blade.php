@extends('layout.app')
@section('content')
<!--              <div class="hidden sm:ml-6 sm:flex sm:space-x-8">-->
<!--                &lt;!&ndash; Current: "border-gray-800 text-gray-900 font-semibold", Default: "border-transparent text-gray-600 hover:border-gray-300 hover:text-gray-800" &ndash;&gt;-->
<!--                <a-->
<!--                  href="#"-->
<!--                  class="inline-flex items-center border-b-2 border-gray-800 px-1 pt-1 text-sm font-semibold text-gray-900"-->
<!--                  >Discover</a-->
<!--                >-->
<!--                <a-->
<!--                  href="#"-->
<!--                  class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-600 hover:border-gray-300 hover:text-gray-800"-->
<!--                  >For you</a-->
<!--                >-->
<!--                <a-->
<!--                  href="#"-->
<!--                  class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-600 hover:border-gray-300 hover:text-gray-800"-->
<!--                  >People</a-->
<!--                >-->
<!--              </div>-->
            
              <!-- This Button Should Be Hidden on Mobile Devices -->
<!--              <button-->
<!--                type="button"-->
<!--                class="text-gray-900 hover:text-white border-2 border-gray-800 hover:bg-gray-900 focus:ring-2 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center hidden md:block">-->
<!--                Create Post-->
<!--              </button>-->

<!--              <button-->
<!--                type="button"-->
<!--                class="rounded-full bg-white p-2 text-gray-800 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">-->
<!--                <span class="sr-only">View notifications</span>-->
<!--                &lt;!&ndash; Heroicon name: outline/bell &ndash;&gt;-->
<!--                <svg-->
<!--                  class="h-6 w-6"-->
<!--                  xmlns="http://www.w3.org/2000/svg"-->
<!--                  fill="none"-->
<!--                  viewBox="0 0 24 24"-->
<!--                  stroke-width="1.5"-->
<!--                  stroke="currentColor"-->
<!--                  aria-hidden="true">-->
<!--                  <path-->
<!--                    stroke-linecap="round"-->
<!--                    stroke-linejoin="round"-->
<!--                    d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />-->
<!--                </svg>-->
<!--              </button>-->

<!--              <button-->
<!--                type="button"-->
<!--                class="rounded-full bg-white p-2 text-gray-800 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">-->
<!--                <span class="sr-only">Messages</span>-->
<!--                <svg-->
<!--                  xmlns="http://www.w3.org/2000/svg"-->
<!--                  fill="none"-->
<!--                  viewBox="0 0 24 24"-->
<!--                  stroke-width="1.5"-->
<!--                  stroke="currentColor"-->
<!--                  class="w-6 h-6">-->
<!--                  <path-->
<!--                    stroke-linecap="round"-->
<!--                    stroke-linejoin="round"-->
<!--                    d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />-->
<!--                </svg>-->
<!--              </button>-->

           

    <main
      class="container max-w-xl mx-auto space-y-8 mt-8 px-2 md:px-0 min-h-screen">
      <!-- Profile Edit Form -->

      <form action="{{ route('edit-user') }}" method="POST">
    @csrf
    
    
        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-xl font-semibold leading-7 text-gray-900">
              Edit Profile
            </h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">
              This information will be displayed publicly so be careful what you
              share.
            </p>

            <div class="mt-10 border-b border-gray-900/10 pb-12">
<!--              <div class="col-span-full mt-10 pb-10">-->
<!--                <label-->
<!--                  for="photo"-->
<!--                  class="block text-sm font-medium leading-6 text-gray-900"-->
<!--                  >Photo</label-->
<!--                >-->
<!--                <div class="mt-2 flex items-center gap-x-3">-->
<!--                  <input-->
<!--                    class="hidden"-->
<!--                    type="file"-->
<!--                    name="avatar"-->
<!--                    id="avatar" />-->
<!--                  &lt;!&ndash; <img-->
<!--                    class="h-12 w-12 rounded-full"-->
<!--                    src="https://avatars.githubusercontent.com/u/831997"-->
<!--                    alt="Ahmed Shamim Hasan Shaon" /> &ndash;&gt;-->
<!--                  <svg-->
<!--                    class="h-12 w-12 text-gray-300"-->
<!--                    viewBox="0 0 24 24"-->
<!--                    fill="currentColor"-->
<!--                    aria-hidden="true">-->
<!--                    <path-->
<!--                      fill-rule="evenodd"-->
<!--                      d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"-->
<!--                      clip-rule="evenodd" />-->
<!--                  </svg>-->
<!--                  <label for="avatar">-->
<!--                    <div-->
<!--                      class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">-->
<!--                      Change-->
<!--                    </div>-->
<!--                  </label>-->
<!--                </div>-->
<!--              </div>-->

              <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                  <label
                    for="first-name"
                    class="block text-sm font-medium leading-6 text-gray-900"
                    >First name</label
                  >
                  <div class="mt-2">
                    <input
                      type="text"
                      name="first_name"
                      id="first-name"
                      autocomplete="given-name"
                     value="{{ $user->first_name }}"
                      class="block w-full rounded-md border-0 p-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6" />
                      <span>@error('first_name') {{ $message}}
                    
                        @enderror
                    </div>
                </div>

                <div class="sm:col-span-3">
                  <label
                    for="last-name"
                    class="block text-sm font-medium leading-6 text-gray-900"
                    >Last name</label
                  >
                  <div class="mt-2">
                    <input
                      type="text"
                      name="last_name"
                      id="last-name"  
                      value="{{ $user->last_name }}"
                    
                      autocomplete="family-name"
                      class="block w-full rounded-md border-0 p-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6" />
                      <span>@error('last_name') {{ $message}}
                    
                        @enderror
                 
                    </div>
                </div>

                <div class="col-span-full">
                  <label
                    for="email"
                    class="block text-sm font-medium leading-6 text-gray-900"
                    >Email address</label
                  >
                  <div class="mt-2">
                    <input
                      id="email"
                      name="email"
                      type="email"
                      autocomplete="email"
                      value="{{ $user->email}}"
                      class="block w-full rounded-md border-0 p-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6" />
                 
                      <span>@error('email') {{ $message}}
                    
                        @enderror
                      </span>
                    </div>
                </div>

                <div class="col-span-full">
                  <label
                    for="password"
                    class="block text-sm font-medium leading-6 text-gray-900"
                    >Password</label
                  >
                  <div class="mt-2">
                    <input
                      type="password"
                      name="password"
                      id="password"
                      class="block w-full rounded-md border-0 p-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6" />
                  
                  
                      <span>@error('password') {{ $message}}
                    
                        @enderror
                      </span>
                    </div>
                </div>
              </div>
            </div>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="col-span-full">
                <label
                  for="bio"
                  class="block text-sm font-medium leading-6 text-gray-900"
                  >Bio</label
                >
                <div class="mt-2">
                  <textarea
                    id="bio"
                    name="bio"
                    rows="3"
                    class="block w-full rounded-md border-0 p-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6">{{ $user->bio}}</textarea
                  >
                  
                  <span>@error('bio') {{ $message}}
                    
                    @enderror
                  </span>
                </div>
                
                <p class="mt-3 text-sm leading-6 text-gray-600">
                  Write a few sentences about yourself.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
          <button
            type="button"
            class="text-sm font-semibold leading-6 text-gray-900">
            Cancel
          </button>
          <button
            type="submit"
            class="rounded-md bg-gray-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">
            Save
          </button>
        </div>
      </form>
      <!-- /Profile Edit Form -->
    </main>

    @endsection