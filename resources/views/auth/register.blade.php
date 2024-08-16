<x-main>
    <x-slot:vite></x-slot>

 {{--    ------------FORM DI REGISTRAZIONE --}}
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
          </div>
          
           
        @error('email')
        <span>{{ $message }}</span>
        @enderror

          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
            </div>

             
        @error('name')
        <span>{{ $message }}</span>
        @enderror

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>

         
        @error('password')
        <span>{{ $message }}</span>
        @enderror

        <div class="mb-3">
            <label for="passsword_confirmation" class="form-label">Password Confirmation</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
          </div>
      
           
        @error('password_confirmation')
        <span>{{ $message }}</span>
        @enderror

        <button type="submit" class="btn btn-primary">Register</button>
      </form>


</x-main>