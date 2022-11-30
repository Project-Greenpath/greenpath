@extends ('layouts.layout')

@section('content')
<section class="listing-section" >
<div class="form-group" >
<form action="upload.php" method="post" enctype="multipart/form-data">

Cycle Brand
<input type="text" name="Cycle brand" value="Enter cycle brand" />
Enter rent of cycle per hour
<input type="number" name="Cycle Rent" value="Enter rent of cycle per hour" />
Upload Cycle images
  <input type="file" name="fileToUpload" id="fileToUpload">
 Other cycle details
  <input type="text" name="Cycle details" value="" />
  <input type="submit" value="Upload Image" name="submit">
</form>
</div>
</section>

@endsection