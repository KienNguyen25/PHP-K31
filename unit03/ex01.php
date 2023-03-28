<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- include stylesheet -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

<!-- include script -->

</head>
<body>
<form action="save.php" method="post">
  <textarea id="summernote" name="content"></textarea>
  <button type="submit">Submit</button>
</form>
<script>
$(document).ready(function() {
  $('#summernote').summernote();
});
</script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>



</body>
</html>