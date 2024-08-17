<div>
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->
    <h2>Add New User</h2>

    <!-- <div>
        {{-- {{print_r($errors);}} --}}

        @if($errors->any())
        @foreach ($errors->all() as $error)
            <div style="color: red">{{$error}}</div>
        @endforeach
        @endif
    </div> -->

    <form action="addUser" method="post">
        @csrf
        <div class="input-form">
            <input type="text" placeholder="enter username" name="username" value="{{old('username')}}" class="{{ $errors->first('username') ? 'input-error' : '' }}">
            <span style="color: red">@error('username'){{$message}}@enderror</span>
        </div>
        <div class="input-form">
            <input type="text" placeholder="enter city" name="city" value="{{old('city')}}" class="{{ $errors->first('city') ? 'input-error' :  ''}}">
            <span style="color: red">@error('city'){{$message}}@enderror</span>
        </div>
        <div class="input-form">
            <input type="text" placeholder="enter email" name="email" value="{{old('email')}}" class="{{ $errors->first('email') ? 'input-error' :  ''}}">
            <span style="color: red">@error('email'){{$message}}@enderror</span>
        </div>
        <div class="input-form">
            <button>Add New User</button>
        </div>
    </form>
</div>

<style>
    input{
        color: orange;
        border: 1px solid orange;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        margin: 10px;
    }
    button{
        color: orange;
        border: 1px solid orange;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        margin: 10px;
        background-color: #fff;
        cursor: pointer;
    }

    .input-error{
        border: 1px solid red;
        color: red;
    }
</style>
