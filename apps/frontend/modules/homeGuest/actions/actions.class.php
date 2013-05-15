<?php
class homeGuestActions extends sfActions
{
  /**
   * 默认动作
   * @param unknown $request
   * @return string
   */
  public function executeIndex($request)
  {
    // First go to this web, user is a guest
    //$this->getUseir()->setAuthenticated(false);
    // Test Class
//     $myPhone = Phone::getInstance();
//     $TestParams = array(
//         'id'=>1,
//         'class'=>$myPhone
//     );
//     echo $TestParams['class']->price."<br />";

    //PHP5中对象是引用传递的，为了修改原来的对象的值，必须使用clone方法。
//     $yourPhone = clone $TestParams['class'];
//     //$yourPhone = $TestParams['class'];
   
//     $yourPhone->price = $yourPhone->price+1;
//     echo $TestParams['class']->price."<br />";
  	//die();
  	
  	echo $this->getRequestParameter('nickname')."<br />";
  	echo $this->getRequestParameter('activationcode');
  	
    $this->card_list = array('VISA'=>'Visa','MAST'=>'Master','AMEX'=>'American Express');
    $this->grade_list = array('GradeOne'=>'一年级','GradeTwo'=>'二年级','GradeThree'=>'三年级');
    return sfView::SUCCESS;
  }

  /**
   * 登陆
   * @param unknown $request
   * @return string
   */
  public function executeLogin($request)
  {
    $this->UserName =  $this->getRequestParameter('username');
    $this->password =  $this->getRequestParameter('password');
    
    // 查询数据库
    $c = new Criteria();
    $c->setLimit(5);
    $Students = StudentPeer::doSelectOne($c);
    
    if ($this->UserName==='roy' && $this->password==='10093633')
    {
      $this->getUser()->setAuthenticated(true);
      return sfView::SUCCESS;
    } else {
      $this->getUser()->setAuthenticated(false);
      return sfView::ERROR;
    } 
  }

  /**
   * 注销
   * @param unknown $request
   */
  public function executeLogout($request)
  {
    $this->getUser()->setAuthenticated(false);
    $this->redirect('@homepage');
  }

  /**
   * 变量测试
   * @param unknown $request
   * @return string
   */
  public function executeActiontotem($request)
  {
    $this->content = 'may force with you!';
    //sfConfig::set('first,'blackberry!');
    $this->comments = null;
    //$c = new Criteria();
    //$c->add(CommentPeer::POST_ID, $this->getRequestParameter('id'));
    //$c->addAscendingOrderByColumn(CommentPeer::CREATED_AT);
    //$this->comments = CommentPeer::doSelect($c);   
     

    return sfView::SUCCESS;
  }

  public function executeSubmitForm()
  {
    $this->name = $this->getRequestParameter('name');
    $this->pay_type = $this->getRequestParameter('pay_type');
  }

  /**
   * 数据库测试
   */
  public function executeSaveData()
  {
    $student_name = $this->getRequestParameter('student_name');
    $grade = $this->getRequestParameter('grade');
    
    // 增加
//     $student = new Student();
//     $student->setName($student_name);
//     $student->setGrade(1);
//     $student->save();
    $teacher = new Teacher();
    $teacher->setName($student_name);
    $teacher->setType('physics');
    $teacher->save();
    
    // 修改
    
    // 查询
    $c = new Criteria();
    $c->addDescendingOrderByColumn(StudentPeer::CREATED_AT);
    $c->setLimit(5);
    $Students = StudentPeer::doSelect($c);
    
    foreach ($Students as $student)
    {
    	echo 'ID: '.$student->getId().' Name: '.$student->getName().' Teacher ID: '.$student->getTeacherId().' Created Time: '.$student->getCreatedAt()." <br />";
    }
    
    $id = 1;
    
    $teacher = TeacherPeer::retrieveByPK($id);
    $student = StudentPeer::retrieveByPK($id);
    
    echo 'ID: '.$student->getId().' Name: '.$student->getName().' Teacher ID: '.$student->getTeacherId().' Created Time: '.$student->getCreatedAt()." <br />";
    $student->setName('Swift');
    $student->setTeacherId($teacher->getId());
    StudentPeer::doUpdate($student);
    $student = StudentPeer::retrieveByPK($id);
    echo 'ID: '.$student->getId().' Name: '.$student->getName().' Teacher ID: '.$student->getTeacherId().' Created Time: '.$student->getCreatedAt()." <br />";
    
    // 删除
//     $Students[0]->delete();
    
    return $this->renderText("<html><body>  Database operation success !</body></html>");
  }
  
  /**
   * Ajax测试
   */
  public function executeAjaxTest()
  {
  	return $this->renderText("<strong>This is modified by Ajax! Time: ".date('Y-m-d H:i:s')."</ strong>");
  }
  
  /**
   * Ajax表单验证测试
   */
  public function executeValidUsername()
  {
  	return $this->renderText("<strong>This is modified by Ajax! Time: ".date('Y-m-d H:i:s')."</ strong>");
  }
}

