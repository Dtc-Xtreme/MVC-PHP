<script src="/javascript/registreren.js"></script> 

<div class="row">
    <h1>Registreren</h1>

    <form method="post" action="/account/register">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="..." /></br>
        <label for="email1">Email:</label>
        <input type="email" id="email1" name="email1" placeholder="..." /></br>
        <label for="email2">Repeat email:</label>
        <input type="email" id="email2" name="email2" placeholder="..." /></br>
        <label for="password1">Password:</label>
        <input type="password" id="password1" name="password1" placeholder="..." /></br>
        <label for="password2">Repeat Password:</label>
        <input type="password" id="password2" name="password2" placeholder="..." /></br>
        <input type="submit" value="Submit"/>
    </form>
</div>