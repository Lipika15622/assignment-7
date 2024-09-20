 @extends('layout.app')
 @section('content')
   
 

      <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form
          class="space-y-6"
          action="{{route('register-user')}}"
          method="POST">
          @if (Session::has('success'))
          <div class = "alert alert-success">{{Session::get('success')}}</div>
        @endif

         @if (Session::has('fail'))
          <div class = "alert alert-danger">{{Session::get('fail')}}</div>
        @endif
          @csrf
          <!-- Name -->
          <div>
            <label
              for="first_name"
              class="block text-sm font-medium leading-6 text-gray-900"
              >First Name</label
            >
            <div class="mt-2">
              <input
                id="name"
                name="first_name"
                type="text"
                autocomplete="name"
                placeholder="Enter Full Name"
                value = "{{old('first_name')}}"
                required
                class="block w-full rounded-md border-0 p-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm sm:leading-6" />
                <span>@error('first_name') {{ $message}}
                    
                @enderror
                </span>
            </div>
          </div>

         
       <div>
            <label
              for="last_name"
              class="block text-sm font-medium leading-6 text-gray-900"
              >Last name</label>
            <div class="mt-2">
              <input
                id="last_name"
                name="last_name"
                type="text"
                autocomplete="last_name"
                placeholder="Enter last_name"
                 value = "{{old('last_name')}}"
                required
                class="block w-full rounded-md border-0 p-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm sm:leading-6" />
                <span>@error('last_name') {{ $message}}
                    
                @enderror
                </span>
            </div>
          </div> 

          <!-- Email -->
          <div>
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
                placeholder="Enter Email"
                value = "{{old('email')}}"
                required
                class="block w-full rounded-md border-0 p-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm sm:leading-6" />
                <span>@error('email') {{ $message}}
                    
                @enderror
                </span>
            </div>
          </div>

          <!-- Password -->
          <div>
            <label
              for="password"
              class="block text-sm font-medium leading-6 text-gray-900"
              >Password</label
            >
            <div class="mt-2">
              <input
                id="password"
                name="password"
                type="password"
                autocomplete="current-password"
                placeholder="••••••••"
                 value = ""
                required
                class="block w-full rounded-md border-0 p-2 p-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm sm:leading-6" />
                <span>@error('password') {{ $message}}
                    
                @enderror
                </span>
            </div>
          </div>

          <div>
            <button
              type="submit"
              class="flex w-full justify-center rounded-md bg-black px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-black focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black">
              Register
            </button>
          </div>
        </form>

        <p class="mt-10 text-center text-sm text-gray-500">
          Already a member?
          <a
            href="{{ route('login') }}"
            class="font-semibold leading-6 text-black hover:text-black"
            >Sign In</a
          >
        </p>
      </div>
    </div>
  </body>
</html>
@endsection