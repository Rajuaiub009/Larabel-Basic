<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>
</head>
<body>
    <h1>All Posts</h1>
    <table border="1" width="100%">
        <thead>
            <th>Serial No </th>
            <th>Title</th>
            <th>Details</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php foreach($posts as $post){ ?>
            <tr>
                <td><?php echo $post->id;?></td>
                <td><?php echo $post->title;?></td>
                <td><?php echo $post->details;?></td>
                <td>
                <a href="<?php echo url('post/show',$post->id); ?>">Show details</a>
                <a href="<?php echo url('post/edit',$post->id); ?>">Edit</a>
                <a href="<?php echo url('post/delete',$post->id); ?>">Delete</a>
                <!-- <form action="<?php echo url('post/delete',$post->id) ?>" method="post">
                <?php echo csrf_field();?>
                <input hidden type="text" name="_method" value="DELETE">
                <button>Delete</button>
            </form> -->
            </tr>
            <?php } ?>
        </tbody>

    </table>
</body>
</html>