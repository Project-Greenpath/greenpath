@extends ('layouts.layout')

@section('content')
<link rel="stylesheet" href="/css/borrow.css">
    <section class="borrow-section">
        <div class="form-group">
            <h1>Borrow New Cycle</h1>
            <form>
                <label for="fname">Name of Borrower</label><br>
                <input type="text" id="fname" name="fname"><br>
                <label for="number">Phone Number</label><br>
                <input type="number" id="phonenumber" name="phonenumber"><br>
                <label for="email">Email</label><br>
                <input type="email" id="email" name="email"><br>
                <label for="bike">Type of bike</label><br>
                <input type="text" id="bike" name="bike"><br>
                <label for="dateNeed">Date need</label><br>
                <input type="date" id="dateNeed" name="dateNeed"><br>
                <label for="datereturn">Date Return</label><br>
                <input type="date" id="datereturn" name="datereturn"><br>
                <label for="deliveraddress">Delivery Address</label><br>
                <input type="text" id="deliveryaddress" name="deliveryaddress"><br>
                <input type="submit" class="cta" value="Submit">
              </form>
        </div>
    </section>
      @endsection