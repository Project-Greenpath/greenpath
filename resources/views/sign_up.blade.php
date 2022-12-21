@extends ('layouts.layout')

@section('content')
<link rel="stylesheet" href="/css/sign_up.css">
<section class="login-section">
    <div class="form-group">
        <h1>Sign Up</h1>
        <form action="/sign-up" method="POST">
            @csrf
            <label for="collegeid">College ID</label>
            <input type="text" name="collegeid" id="collegeid" class="username" placeholder="TVEXXXXXXX">

            <label for="full_name">Full Name</label>
            <input type="text" name="full_name" id="full_name" class="username" placeholder="John Doe">

            <label for="department">Department</label>
            <select name="department" id="department">
                <option value="cse">Computer Science and Engineering (CSE)</option>
                <option value="aei">Applied Electronics and Engineering</option>
                <option value="ece">Electronics and Communication Engineering</option>
                <option value="eee">Electrical and Electronics Engineering</option>
                <option value="civ">Civil Engineering</option>
                <option value="mec">Mechanical Engineering</option>
                <option value="ind">Industrial Engineering</option>
            </select>

            <label for="yog">Year of Graduation</label>
            <input type="text" name="yog" id="yog">

            <label for="phone">Mobile Number</label>
            <input type="tel" name="phone" id="phone">

            <label for="email">Email</label>
            <input type="email" name="email" id="email">

            <input type="submit" value="Sign Up" class="cta">
        </form>
    </div>
</section>
@endsection