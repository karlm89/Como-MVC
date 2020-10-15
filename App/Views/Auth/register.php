<?php 
    use FW\APP\Core\Application;
    include_once Application::$ROOT_DIR."/views/layouts/header.php" 
?>    
    <h1>Register</h1>
    <form class="mt-4" action="/register" method="POST">
        <div class="form-row pb-3">
            <div class="col-6">
                <label for="firstname">First Name</label>
                <input type="text" class="form-control" aria-describedby="First Name">
            </div>

            <div class="col-6">
                <label for="lastname">Last Name</label>
                <input type="text" class="form-control" aria-describedby="Last Name">
            </div>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="email">Confirm Email</label>
            <input type="email" class="form-control" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

<?php include_once Application::$ROOT_DIR."/views/layouts/header.php" ?>  