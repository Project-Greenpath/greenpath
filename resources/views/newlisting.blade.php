@extends ('layouts.layout') 

@section('content')
<link rel="stylesheet" href="/css/listing.css">
<section class="listing-section">
    <div class="form-group">
      @if (session('success'))
       <div class="alert alert-success">
         {{ session('success') }}
            </div>
          @endif
  <h1>New Listing</h1>
  <form action="/cycles" method="post" enctype="multipart/form-data">
    @csrf

    Cycle Brand
    <input name='brand' type="text" name="Cycle brand" placeholder="Enter cycle brand" />
    Enter rent of cycle per hour
    <div style="display:flex; align-items:center; font-size: .8rem; font-style:italic;">
      Rs.
      <input type="number" name="rent" placeholder="20" />
      per hour
    </div>
    Upload Cycle images
    <input type="file" name="image" id="fileToUpload" />
    Other cycle details
    <input type="text" name="description" value="" />
    <input type="submit" class="cta" value="Add Cycle" name="submit" />
  </form>
</div>
</section>

@endsection