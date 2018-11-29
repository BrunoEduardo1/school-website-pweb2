<?php
$class = 'message';
if (!empty($params['class'])) {
    $class .= ' ' . $params['class'];
}
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<?php /* <div class="<?= h($class) ?>" onclick="this.classList.add('hidden');"><?= $message ?></div> */ ?>
<div class="alert alert-info alert-dismissible fade show fixed-top text-center bg-info border-0 text-white" role="alert">
<?= $message ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
