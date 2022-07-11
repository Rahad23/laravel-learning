<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<h1>Contact</h1>

<a href="{{URL('/')}}">Back</a>

@if (session('session'))
    {{-- <div class="alert alert-success">
        {{ session('session') }}
    </div> --}}
@endif

<div class="container">
    <div class="row">
      <div class="col-lg-1"></div>
      <div class="col-lg-10">
        <style>
          .from-s{
            height: auto;
            padding: 100px 30px;
          }
          .text-left{
            text-align: left;
            margin-top: 10px;
          }
        </style>
          <div class="from-s shadow-lg">
            <form action="{{route('student.store')}}" method="POST">

              @csrf
              
              {{-- <input type="text" name="_token" hidden value="{{ csrf_token() }}"> --}}
              
              <div class="row">
                  <div class="col-md-6">
                    <input type="text" class="form-control @error('first-name', 'post') is-invalid @enderror" placeholder="First name" aria-label="First name" name="first-name" value="{{ old('first-name') }}">
                    
      @error('first-name')
                    <strong class="text-danger">{{ $message }}</strong>
      @enderror
                  </div>

                  <div class="col-md-6">
                    <input type="text" class="form-control @error('last-name', 'post') is-invalid @enderror" placeholder="Last name" aria-label="Last name" name="last-name" value="{{ old('last-name') }}">

      @error('last-name')
                  <strong class="text-danger">{{ $message }}</strong>
      @enderror
                  </div>

                  <div class="col-md-6 mt-3">
                    <input type="email" class="form-control @error('email', 'post') is-invalid @enderror" placeholder="E-mail" aria-label="email" value="{{ old('email') }}">

      @error('email')
                    <strong class="text-danger">{{ $message }}</strong>
      @enderror
                  </div>

                  <div class="col-md-6 mt-3">
                    <input type="number" class="form-control @error('number', 'post') is-invalid @enderror" placeholder="phone-number" aria-label="number" name="number" value="{{ old('number') }}">

      @error('number')
                      <strong class="text-danger">{{ $message }}</strong>
      @enderror
                  </div>

                  <div class="col-md-8 mt-3">
                    <input type="password" class="form-control @error('password', 'post') is-invalid @enderror" placeholder="set-password" aria-label="password" name="password" value="{{ old('password') }}">
      @error('number')
                    <strong class="text-danger">{{ $message }}</strong>
      @enderror
                  </div>

                  <div class="col-12 text-left">
                    <button type="submit" class="btn btn-primary" name="submit">Sign in</button>
                  </div>
                </div>
              </form>
          </div>
      </div>
      <div class="col-lg-1"></div>
    </div>
</div>


 @guest
<a href="#">Login</a>
    @else
    <a href="#">page</a>
@endguest