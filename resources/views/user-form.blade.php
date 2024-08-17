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
            <input type="text" placeholder="enter username" name="username">
            <span style="color: red">@error('username'){{$message}}@enderror</span>
        </div>
        <div class="input-form">
            <input type="text" placeholder="enter city" name="city">
            <span style="color: red">@error('city'){{$message}}@enderror</span>
        </div>
        <div class="input-form">
            <input type="text" placeholder="enter email" name="email">
            <span style="color: red">@error('email'){{$message}}@enderror</span>
        </div>
        <div>
            <h4>User skills</h4>
            <input type="checkbox" name="skill[]" id="php" value="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" id="java" value="Java">
            <label for="java">Java</label>
            <input type="checkbox" name="skill[]" id="node" value="Node">
            <label for="node">Node</label>

            <span style="color: red">@error('skill'){{$message}}@enderror</span>
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
</style>
