<section id="menu">
    <div id="logo">
      <h2>SANALİNKER</h2>
    </div>
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">

         <a href="{{Route('index')}}"><i class="fa-solid fa-house-chimney icon"></i>homepage</a>
    <a href="{{route('about')}}"><i class="fa-solid fa-circle-info icon"></i>about</a>
    <a href="{{route('contact')}}"><i class="fa-solid fa-address-book icon"></i>contact</a>
    @guest
    <a href="{{Route('login')}}"><i class="fa-solid fa-right-to-bracket icon"></i>login</a>
    <a href="{{route('signup')}}"><i class="fa-solid fa-user-plus icon"></i>sign up</a>
@else
    <a href="{{route('logout')}}"><i class="fa-solid fa-user-minus icon"></i>logout</a>
    @endguest
    </nav>
    </section>

