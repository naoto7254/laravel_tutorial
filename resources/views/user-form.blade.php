<div>
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->
    <h2>Add New User</h2>

    <form action="addUser" method="post">
        @csrf
        <div class="input-form">
            <input type="text" placeholder="enter username" name="username">
        </div>
        <div class="input-form">
            <input type="text" placeholder="enter city" name="city">
        </div>
        <div class="input-form">
            <input type="text" placeholder="enter email" name="email">
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
