<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<section class="container">

        <h3>��������</h3>
        
        <div><!--/product-information-->
          <?php $search = ActiveForm::begin([
            'action' => ['wakan/dob'],
            'options' => [
                'id' => 'search-form',
                'method' => 'post',
            ]
        ]);
        ?>
      <div class="login">      
          
         <input type="text" value="<?= $product->name?>" name="name1" class="inp1" size="40">
            
            <p><b>Brand:</b> <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $product->category->id]) ?>"><?= $product->category->name?></a></p>
           <h2>����������</h2> 
           <h7> <?= $product->content?> </h7>
		   <br><br><br>
			<h1>��������� �����</h1>
		<h7>���� ���</h7>	<input type="text" value="" name="name2" class="inp1" size="40">
		<h7>���� �������</h7>	<input type="text" value="" name="name3" class="inp1" size="40">
        <h7>���� ��������</h7>	<input type="text" value="" name="name4" class="inp1" size="40">
         <h7>������������� ���������� (+���������� ������)</h7>	  <p><textarea name="comment" class="inp1" size="40"></textarea></p>		
			<p><input type="submit" value="���������"></p>
        </div><!--/product-information-->
    </div>
   
</div><!--/product-details-->

<?php ActiveForm::end(); ?>
</div>
</div>

</section>
