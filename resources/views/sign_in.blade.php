@extends ('layouts.layout')

@section('content')
<link rel="stylesheet" href="/css/sign_in.css">
<section class="login-section">
    <div class="form-group">
        <h1>Log In</h1>
        <form action="" method="post">
            <label for="collegeid">College ID</label>
            <input type="text" name="collegeid" id="collegeid" class="username" placeholder="TVEXXXXXXX">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <input type="submit" value="Sign In" class="cta">
        </form>
    </div>
</section>
@endsection