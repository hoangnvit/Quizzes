

<h2 class="text-center text-primary"><?= $title ?></h2>







<?php echo form_open(isset($_GET['act'])&&($_GET['act'] === 'update') ? 'Edit/update' :'Edit/create',['class'=>"border border-3 rounded mx-auto border-warning mx-auto col-7 px-3 py-1"]); ?>

  <div class="form-group col-10 mt-4">
    <label class="label label-primary text-primary font-weight-bold">Question:</label>
    <textarea name="question" class="form-control" id="question" rows="3" value="<?php echo set_value('question'); ?>"><?php if(isset($record)) echo $record->question ?></textarea>
    <div class="text-danger"><?php echo form_error('question'); ?></div>
  </div>
  <div class="form-group col-10">
    <label class="label label-primary text-primary font-weight-bold">Option A:</label>
    <input type="textbox" name="optiona" class="form-control" value="<?php if(isset($record)) echo $record->option1 ?>" >
     <div class="text-danger"><?php echo form_error('optiona'); ?></div>
  
  </div>
  <div class="form-group col-10">
    <label class="label label-primary text-primary font-weight-bold">Option B:</label>
    <input type="textbox"  name="optionb" class="form-control" value="<?php if(isset($record)) echo $record->option2 ?>">
    <div class="text-danger"><?php echo form_error('optionb'); ?></div>
  
  </div>
  <div class="form-group col-10">
    <label class="label label-primary text-primary font-weight-bold">Option C:</label>
    <input type="textbox"  name="optionc" class="form-control" value="<?php if(isset($record)) echo $record->option3 ?>" >
    <div class="text-danger"><?php echo form_error('optionc'); ?></div>
  
  </div>
  <div class="form-group col-10">
    <label class="label label-primary text-primary font-weight-bold">Option D:</label>
    <input type="textbox"   name="optiond" class="form-control" value="<?php if(isset($record)) echo $record->option4 ?>" >
    <div class="text-danger"><?php echo form_error('optiond'); ?></div>
  
  </div>
  <div>
  <label class="label label-primary text-primary font-weight-bold mx-2" >Correct Answer:</label>
		<span class="mx-3">
		<input class="form-check-input" type="radio" name="answer" value="A"  <?= set_radio('answer', 'A', TRUE) ?> checked>
		<label class="form-check-label" for="exampleRadios1">
			A
		</label>
    </span>
		
		<span class="mx-3">
		<input class="form-check-input" type="radio" name="answer" value="B"   <?= set_radio('answer', 'B', ) ?>>
		<label class="form-check-label" for="exampleRadios1">
			B
		</label>
    </span>
		
		<span class="mx-3">
		<input class="form-check-input" type="radio" name="answer" value="C"   <?= set_radio('answer', 'C', ) ?>>
		<label class="form-check-label" for="exampleRadios1">
			C
		</label>
    </span>
		
		<span class="mx-3">
		<input class="form-check-input" type="radio" name="answer" value="D"  <?= set_radio('answer', 'D', ) ?>>
		<label class="form-check-label" for="exampleRadios1">
			D
		</label>
    </span>
		
		
</div>
<?php if(isset($record)){?>
<input name="id"   id="id" type="hidden"  value="<?= $record->id?>" class='field rounded' /> 
<?php } ?>
<?php 
if(isset($_GET['act'])&&($_GET['act']==='update')){
?>
<input name="act" type="hidden" id="act" value="update" />
<input class="col-4 mx-auto rounded mb-3 text-warning font-weight-bold"  name="Update Question" type="submit" value="Update Question" />
<?php } else { ?>

<input name="act" type="hidden" id="act" value="addNew" />
<input class="col-4 mx-auto rounded mb-3 font-weight-bold text-warning"  name="Add New Question" type="submit" value="Add New Question" />
<?php } ?>
</form>


<?php if(isset($delete_record)){?>
      <p> Do you want to <a href="index.php?/Edit/delete?id=<?= $delete_record->id?>"> Delete</a>  question ID: <?= $delete_record->id?></p>
      


 <?php } ?>
<table class="border border-2  mx-auto col-9  my-5  ">


    <tr class="row">
      <th class='col-1 text-info text-center'>#</th>
      <th class='col-9 text-info text-center'>Question</th>
      <th class='col-1 text-info text-center'>Delete</th>
      <th class='col-1 text-info text-center'>Update</th>
    </tr>
  
  
    <?php foreach ($results as $record) { ?>
	  <tr class="row ">
	  <td class='col-1'><?= $record["id"] ?></td>
		<td class='col-9'><?= $record["question"] ?> </td>
		<td class='col-1'><a href="<?=$this->config->base_url()?>index.php?/Edit/delete_info?id=<?= $record["id"]?>" class="btn btn-primary" >D</a>  </td>
    
		<td class='col-1 '><a class="btn btn-primary" href='<?=$this->config->base_url()?>index.php?/Edit/showone?act=update&&id=<?= $record["id"]?>'>U</a> </td>
		
  	</tr>
	<?php } ?>

</table>