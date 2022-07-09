<h1>Contact</h1>

<a href="{{URL('/')}}">Back</a>

@if (session('session'))
    <div class="alert alert-success">
        {{ session('session') }}
    </div>
@endif
<form action="{{route('student.store')}}" method="POST">

@csrf

{{-- <input type="text" name="_token" hidden value="{{ csrf_token() }}"> --}}

<input type="text" placeholder="Name" name="name"><br>
<input type="email" placeholder="Email" name="email"><br>
<button type="submit" name="submit">Submit</button>

</form>

 @guest
<a href="#">Login</a>
    @else
    <a href="#">page</a>
@endguest