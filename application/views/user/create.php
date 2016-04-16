
<?php echo validation_errors(); ?>

<?php echo form_open('user/create'); ?>
  First name:<br>
  <input type="text" name="name"><br>
  Last name:<br>
  <input type="text" name="surname"><br>
  Email:<br>
  <input type="text" name="email">
  <input type="submit" value="Submit">
</form>