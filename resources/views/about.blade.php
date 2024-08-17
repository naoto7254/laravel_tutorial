<x-message-banner :msg="'user signup has been done'" class="success"/>
<x-message-banner :msg="'server is down'" class="error"/>
<x-message-banner :msg="'no product found'" class="warning"/>

<h1>
    About Page
</h1>
@include('common.inner', ['page' => 'this is about page'])

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
