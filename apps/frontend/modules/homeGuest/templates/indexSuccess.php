    <?php use_helper('Form') ?>
    <?php use_helper('Number') ?>
    <?php use_helper('Javascript') ?>
    
    <?php //echo $sf_user->getCulture()."<br />"; ?> 
    <?php //echo 'FR'.format_number(12000.10)."<br />" ?>
    <?php //$sf_user->setCulture('en_US') ?> 
    <?php //echo 'US'.format_number(12000.10)."<br />" ?>
    <?php //$sf_user->setCulture('zh_CN') ?> 
    <?php //echo 'CN'.format_number(12000.10)."<br />" ?>
    
    <?php //echo input_date_tag('birth_date', mktime(0, 0, 0, 9, 14, 2006)) ?>
    
    <div id="javascript_test" style="width:500px;margin:20 auto;border:1px solid green;padding:10px">
      <?php echo Button_to_function('Lucky!', update_element_function("indicator", array(
          "position" => "before",
	      "content" => "<strong>Cake </strong>"))) ?>
      <div id="indicator">Data processing beginning</div> 
      <?php echo javascript_tag(
	   update_element_function("indicator", array(
          "position" => "after",
	      "content" => "<strong>update_element_function</strong>"))
	   );
      ?>
      <hr />
      <div id="ajax_zone"><strong>I'm the origin!</strong></div> 
      <?php echo Button_to_function('AjaxTest!', remote_function(array(
	      'update' => 'ajax_zone' ,
	      'url' => 'homeGuest/AjaxTest',
	       ))); ?>
    </div>
    
    <div id="container" style="width:500px;margin:20 auto;border:1px solid blue;padding:10px">

      <div id="navigator" style="display:inline;float:right">
        <?php //include_partial('currentDate',array('card_list' => $card_list)) ?>
      </div>

      <div id="navigator" style="display:inline;float:right">
        <?php echo form_tag('homeGuest/login'); ?>
          <?php echo label_for('username','UserName: '); ?>
          <?php echo input_tag('username'); ?>
          <div id="username_warnning"></div>
          <?php 
             echo observe_field('username', array(
			  'update' => 'username_warnning',
			  'url' => 'null', )) ;
          ?>
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
