<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Create</title>
</head>
<body>
    <h1>Create New Post</h1>

    <form action="<?php echo url('post/store');?>" method="post">
    <?php echo csrf_field() ?>
        <input type="text" name="title" placeholder="Enter title"><br> <br>
        <textarea name="details" cols="30" rows="10" placeholder="Details"></textarea><br><br>
        <button>Submit</button>
    </form>
</body>
</html>