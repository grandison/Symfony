<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
<form id="post_form" action="<?php echo url_for('post/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post">
  <?php echo $form['_csrf_token'] ?>
  <?php echo $form['id']->render(array('class' => 'comment-input', 'size' => 30)) ?>
  <div class="form-row">
      <?php echo $form['title']->renderLabel() ?>
      <?php echo $form['title']->render(array('class' => 'comment-input', 'size' => 30)) ?>
  </div>
  <div class="form-row">
      <?php echo $form['source']->renderLabel() ?>
      <?php echo $form['source']->render(array('class' => 'comment-input', 'size' => 30)) ?>
  </div>
  <a href="<?php echo url_for('post/index') ?>">Back to list</a>
  <?php echo link_to('Delete', 'post/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
  <input type="submit" value="OK"/>
</form>

