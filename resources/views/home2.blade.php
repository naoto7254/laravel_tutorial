<div>
    <a href="{{URL::to('about2')}}">About Page</a>
    <a href="{{URL::to('about2', ['naoto'])}}">About Page</a>

    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
    <h1>Home Page</h1>
    <h3>{{URL::current()}}</h3>
    <h3>{{URL::full()}}</h3>


    <h3>{{url()->current()}}</h3>
    <h3>{{url()->full()}}</h3>


</div>

<a href="/laravel_project/blog/public/about2">About Page</a>

<a href="{{route('hm')}}">Go to home3</a>
