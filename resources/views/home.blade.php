<h1>Home Page</h1>
{{-- <a href="/about/anil">About Anil</a>
<a href="/about/peter">About Peter</a>
<a href="/">Welcome Page</a> --}}

<h1>{{$name}}</h1>
<h1><?php echo $name?></h1>

<h1>{{rand()}}</h1>

<h1>{{print_r($users)}}</h1>

<div>
    @if ($name === 'naoto')
    <h2>naoto</h2>
    @elseif ($name === 'makoto')
    <h2>makoto</h2>
    @else
    <h2>other</h2>
    @endif
</div>

<div>
    @for ($i = 0; $i <= 2; $i++)
    <h4>{{$i}}</h4>
    @endfor
</div>

<div>
    @foreach ($users as $user)
        <h3>{{$user}}</h3>
    @endforeach
</div>
