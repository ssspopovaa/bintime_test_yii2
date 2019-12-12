<?php use yii\widgets\LinkPager; ?>

<h2 style='text-align:center'>User's List</h2>
<ul class="list-group">
<?php 

    foreach($userList as $item) {
?>        
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href='/users/card/<?php echo $item['id']?>'><?php echo $item['name'] .' ' . 
                                                                      $item['surname'] . ' ' . 
                                                                      $item['email']?></a>
            <span class="badge badge-primary badge-pill">
                <a style='color:red' href='/users/delete/<?php echo $item['id']?>'>X</a>
            </span>
            <span class="badge badge-primary badge-pill">
                <a style='color:white' href='/users/edit/<?php echo $item['id']?>'>Edit</a>
            </span>
        </li>
<?php    
    }
?>

</ul>
	
<?= LinkPager::widget([
    'pagination' => $pages,
]); ?>