    <?php use_helper('Form') ?>
    <div id="container" style="width:500px;margin:0 auto;border:1px solid blue;padding:10px">

      <div id="navigator" style="display:inline;float:right">
        <?php //include_partial('currentDate',array('card_list' => $card_list)) ?>
      </div>

      <div id="navigator" style="display:inline;float:right">
        <?php echo form_tag('homeGuest/login'); ?>
        <?php echo label_for('username','UserName: '); ?>
        <?php echo input_tag('username'); ?>
        <br />
        <?php echo label_for('password','Password: '); ?>
        <?php echo input_password_tag('password'); ?>
        <br />
        <?php echo submit_tag('Login'); ?>
       </form>
      </div>


      <div id="title">
        <h1><?php echo link_to('Roy_Studio','@homeGuest') ?></h1>
      </div>

      <div id="content" style="clear:right">
        <?php echo 'Here we go?' ?>
      </div>
    </div>
    <hr />

    <div>
      <?php echo form_tag('homeGuest/SubmitForm'); ?>
        <?php echo label_for('name','what is your name?'); ?>
        <?php echo input_tag('name'); ?>
        <?php echo select_tag('pay_type',options_for_select($card_list, 'AMEX')); ?>
        <?php echo submit_tag('OK'); ?>
      </form>
    </div>

    <div>
      <?php echo form_tag('homeGuest/SaveData'); ?>
        <?php echo label_for('student_name','Student Name:'); ?>
        <?php echo input_tag('student_name'); ?>
        <?php echo select_tag('grade',options_for_select($grade_list, 'GradeOne')); ?>
        <?php echo submit_tag('Save'); ?>
      </form>
    </div>
