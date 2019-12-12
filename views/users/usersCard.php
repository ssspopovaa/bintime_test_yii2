<?php use yii\widgets\LinkPager; ?>

<h2 style='text-align:center'>User's Card</h2>
<div>
    <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">Name: <?php echo $user->name; ?> </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">Surname: <?php echo $user->surname; ?> </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">Login: <?php echo $user->login; ?> </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">Email: <?php echo $user->email; ?> </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">Date created: <?php echo date('d-m-Y H:i', strtotime($user->date)); ?> </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">Sex: <?php echo $user->sex; ?> </li>

        <li class="list-group-item d-flex justify-content-between align-items-center">Main Address: <?php echo $user->zip . ' ' .
                                 $user->country . ' ' .
                                 $user->city . ' ' .
                                 $user->street . ' ' .
                                 $user->office; ?> </li>
    </ul>                             
</div>

<ul class="list-group">
<h4> Additions Addresses:</h4>
<?php 

    foreach($addressList as $item) {
?>        
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span> <?php echo $item['zip'] .' ' . 
                                                                      $item['country'] . ' ' . 
                                                                      $item['city'] . ' ' .
                                                                      $item['street'] . ' ' .
                                                                      $item['house'] . ' ' .
                                                                      $item['office'] ?></span>
            <span class="badge badge-primary badge-pill">
                <a style='color:red' href='/users/deladr/<?php echo $item['id']?>'>X</a>
            </span>
            <span class="badge badge-primary badge-pill">
                <a style='color:white' href='/users/editadr/<?php echo $item['id']?>'>Edit</a>
            </span>
        </li>
<?php    
    }
?>
                     

<?php LinkPager::widget([
    'pagination' => $pages,
]); ?>

<hr>
<a href = "/users/address/<?php echo $user->id; ?>"><input class="btn" type="button" value="Add New Addition Address" ></a>
