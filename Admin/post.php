<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
  <style type="text/css">
    form label{
      display: block;
      margin-top: 10px;
      font-size: 18px;
    }

    input[type=reset]{
      margin-left: 20px;
    }
  </style>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.js"></script>
</head>
<body>
  <div id="container">
    <ul class="list-group">
    <li class="list-group-item">
       <h2 class="bg-secondary">Create a New Post</h2>
      
    </li>
  <li class="list-group-item">
  <form action="post-add.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" name="title" id="title">
    </div>

    <div class="form-group">
      <label for="catgory">Select a Category</label>
      <select name="category_id" class="form-control" id="catgory">
      <?php
      include("config.php");
      $result=mysqli_query($conn,"SELECT id,name FROM category");
      while($row=mysqli_fetch_assoc($result)): ?>
      <option value="<?php echo $row['id']?>"> 
      <?php echo $row['name'] ?>
      </option>
    <?php endwhile; ?>
    </select>
    </div>    

    <div class="form-group">
      <label for="photo">Featured Image</label>
      <input type="file" name="photo" class="form-control" id="photo">
    </div>

    <div class="form-group">
      <label for="summernote">Content</label>
      <textarea id="summernote" class="form-control" name="content"></textarea>
    </div>
    <br><br>

    <input type="submit" class="btn btn-primary btn-md">
    <input type="reset" class="btn btn-primary btn-md">
  </form>
</li>
  </ul>
  </div>
  <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>
</body>
</html>