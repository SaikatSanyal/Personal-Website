<!DOCTYPE html>
<html>
<body>

<form action="{{ route('images.store')}}" method="post" accept="image/*" enctype="multipart/form-data">
  <input type="file" name="file" accept="">
  {{ csrf_field() }}
  <input type="submit">
</form>
</html>
