<div>
    <!-- An unexamined life is not worth living. - Socrates -->
    <h1>Add New User</h1>

    <form action="addUser2" method="post">
        @csrf
        <div>
            <h4>User skills</h4>
            <input type="checkbox" name="skill[]" id="php" value="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" id="java" value="Java">
            <label for="java">Java</label>
            <input type="checkbox" name="skill[]" id="node" value="Node">
            <label for="node">Node</label>
        </div>
        <div>
            <h4>User Gender</h4>
            <input type="radio" name="gender" id="male" value="Male">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="Female">
            <label for="female">Female</label>
        </div>

        <div>
            <h4>User Age</h4>
            <input type="range" name="age" id="age" max="100" min="18">
        </div>

        <div>
            <h4>User City</h4>
            <select name="city">
                <option value="japan">Japan</option>
                <option value="china">China</option>
                <option value="korea">Korea</option>
            </select>
        </div>

        <div>
            <button>Add New User</button>
        </div>
    </form>
</div>
