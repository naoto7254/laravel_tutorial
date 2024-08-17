@include('common.header')

<x-message-banner :msg="'user added succesfully'" class="success"/>
<x-message-banner :msg="'user longout succesfully'" class="success"/>
<x-message-banner :msg="'no user found'" class="error"/>
<x-message-banner :msg="'some users are missing'" class="warning"/>
<h1>Home Page</h1>

@includeIf('common.inner', ['page' => 'this is home page'])

<style>
    .success{
        background-color: lightgreen;
        color: green;
        padding: 3px 10px;
        display: inline-block;
        border-radius: 2px;
    }
    .error{
        background-color: darkred;
        color: red;
        padding: 3px 10px;
        display: inline-block;
        border-radius: 2px;
    }
    .warning{
        background-color: darkorange;
        color: orange;
        padding: 3px 10px;
        display: inline-block;
        border-radius: 2px;
    }
</style>
