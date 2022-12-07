@extends ('layouts.layout') 

@section('content')
<link rel="stylesheet" href="/css/listing.css">
<section class="listing-section">
    <div class="form-group">
      <h1>New Listing</h1>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            Cycle Brand
            <input type="text" name="Cycle brand" placeholder="Enter cycle brand"   />
            Enter rent of cycle per hour
            <div style="display:flex; align-items:center; font-size: .8rem; font-style:italic;">
            Rs.
              <input
                  type="number"
                  name="Cycle Rent"
                  placeholder="20"
              />
              per hour
            </div>
            Upload Cycle images
            <input type="file" name="fileToUpload" id="fileToUpload" />
            Other cycle details
            <input type="text" name="Cycle details" value="" />
            <input type="submit" class="cta" value="Upload Image" name="submit" />
        </form>
    </div>
</section>

@endsection
