<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Edit</title>
</head>
<body>
    <h1>Edit Post</h1>

    <form action="<?php echo url('post/update',$post->id);?>" method="post">
    <?php echo csrf_field() ?>
    <input hidden type="text" name="_method" value="PUT">
        <input type="text" value="<?php echo $post->title ?>" name="title" placeholder="Enter title"><br> <br>
        <textarea name="details" cols="30" rows="10" placeholder="Details"><?php echo $post->details ?></textarea><br><br>
        <button>Update</button>
    </form>
</body>
</html>