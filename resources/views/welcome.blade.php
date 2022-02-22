@include('includes.header')
<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    @if (Route::has('register'))
                         <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
             </div>
         @endif

        <div class="content">
            <div class="title m-b-md">
                   Laravel
            </div>

            <div class="links">
                <a href="/departments/create">Departments Create</a>
                <a href="/departments">View Departments</a>
                <a href="/students/create">Students Create</a>
                <a href="/students">View Students List</a>
                <a href="/admissions/create">Admission New Students Create</a>
                <a href="/admissions">Admission Students List</a>
            </div>
        </div>
    </div>

