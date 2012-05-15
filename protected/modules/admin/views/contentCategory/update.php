<?php
$this->breadcrumbs = array(
    '内容分类' => array('index'),
    $model->category_name => array('view', 'id' => $model->category_id),
    '更新',
);

$this->menu = array(
    array('label' => '创建内容分类', 'url' => array('create')),
    array('label' => '管理内容分类', 'url' => array('admin')),
);
?>

<h1>更新内容分类 <?php echo $model->category_id; ?></h1>
<?php echo $this->renderPartial('_form', array('model' => $model)); ?>