<?php
$class = isset($attr['class']) ? $attr['class'] : '';
if (!isset($type) || 'file' != $type) {
    $attr['class'] = trim($class . ' btn');
}
?>
<?php if (!$label) {
    $label = isset($label_format)
        ? strtr($label_format, array('%name%' => $name, '%id%' => $id))
        : $view['form']->humanize($name);
} ?>
<button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes', ['attr' => $attr]) ?>><?php echo $view->escape($view['translator']->trans($label, array(), $translation_domain)) ?></button>
