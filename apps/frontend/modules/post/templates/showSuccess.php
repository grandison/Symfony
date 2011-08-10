<table>
  <tbody>
    <tr>
      <th>Author:</th>
      <td><?php echo $blog_post->Author->email_address ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $blog_post->getTitle() ?></td>
    </tr>
    <tr>
      <th>Source:</th>
      <td><?php echo $blog_post->getSource() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $blog_post->getCreatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />
<?php if($user&&$user->id==$blog_post->author_id) { ?>
  <a href="<?php echo url_for('post/edit?id='.$blog_post->getId()) ?>">Edit</a>
<?php } ?>
&nbsp;
<a href="<?php echo url_for('post/index') ?>">List</a>

