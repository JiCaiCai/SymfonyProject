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
  	
  	// 测试JSON
//   	$student = new Student();
//   	$student->setName('Roy');
//   	$student->setId(3);
//   	$student->setGrade(3);
//   	$student->setCreatedAt(date('Y-m-d H:i:s'));
  	
//   	echo '<pre>';
//   	print_r($student);
//   	echo '</pre>';
  	
//   	$json_student = json_encode($obj);
//   	echo '<pre>';
//   	print_r($json_student);
//   	echo '</pre>';

  	
  	echo $this->getRequestParameter('nickname')."<br />";
  	echo $this->getRequestParameter('activationcode');
  	
    $this->card_list = array('VISA'=>'Visa','MAST'=>'Master','AMEX'=>'American Express');
    $this->grade_list = array('GradeOne'=>'一年级','GradeTwo'=>'二年级','GradeThree'=>'三年级');
    return sfView::SUCCESS;
  }
  
  /**
   * The Homepage of website
   */
  public function executeHome()
  {
  	return sfView::SUCCESS;
  }

  /**
   * 登陆
   * @param unknown $request
   * @return string
   */
  public function executeLogin($request)
  {
    $username =  $this->getRequestParameter('username');
    $password =  md5($this->getRequestParameter('password'));
    $loginkeeping = $this->getRequestParameter('loginkeeping');
    
    $c = new Criteria();
    
    $c1 = $c->getNewCriterion(UserPeer::USERNAME, $username);
    $c2 = $c->getNewCriterion(UserPeer::EMAIL, $username);
    $c1->addOr($c2);
    
    $c->add($c1);
    $c->add(UserPeer::PASSWORD,$password);
    
    $this->user = UserPeer::doSelectOne($c);
    
    if (!is_null($this->user)) {
    	return sfView::SUCCESS;
    } else {
    	return sfView::ERROR;
    }
  }
  
  /**
   * 注册
   * @return string
   */
  public function executeRegister()
  {
  	$usernamesignup =  $this->getRequestParameter('usernamesignup');
  	$emailsignup =  $this->getRequestParameter('emailsignup');
  	$passwordsignup = md5($this->getRequestParameter('passwordsignup'));
  	
  	$user = new User();
  	$user->setUsername($usernamesignup);
  	$user->setEmail($emailsignup);
  	$user->setPassword($passwordsignup);
  	$user->save();
  	
  	return $this->redirect('/');
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
//     $teacher = new Teacher();
//     $teacher->setName($student_name);
//     $teacher->setType('physics');
//     $teacher->save();
    
    // 修改
    
    // 查询
//     $c = new Criteria();
//     $c->addDescendingOrderByColumn(StudentPeer::CREATED_AT);
//     $c->setLimit(5);
//     $Students = StudentPeer::doSelect($c);
    
//     foreach ($Students as $student)
//     {
//     	echo 'ID: '.$student->getId().' Name: '.$student->getName().' Teacher ID: '.$student->getTeacherId().' Created Time: '.$student->getCreatedAt()." <br />";
    	
//     	echo '<pre>';
//     	print_r($student->getTeacher()); 
//     	echo '</pre>';
//     }
    
    $c = new Criteria();
    $c->addAscendingOrderByColumn(TeacherPeer::CREATED_AT);
    $pager = new sfPropelPager('Teacher', 10);
    $pager->setCriteria($c);
    $pager->setPage($this->getRequestParameter('page', 1));
    $pager->init();
    $this->pager = $pager;
    
    $this->setTemplate('list');
    
//     $id = 1;
    
//     $teacher = TeacherPeer::retrieveByPK($id);
//     $student = StudentPeer::retrieveByPK($id);
    
//     echo 'ID: '.$student->getId().' Name: '.$student->getName().' Teacher ID: '.$student->getTeacherId().' Created Time: '.$student->getCreatedAt()." <br />";
//     $student->setName('Swift');
//     $student->setTeacherId($teacher->getId());
//     StudentPeer::doUpdate($student);
//     $student = StudentPeer::retrieveByPK($id);
//     echo 'ID: '.$student->getId().' Name: '.$student->getName().' Teacher ID: '.$student->getTeacherId().' Created Time: '.$student->getCreatedAt()." <br />";
    
    // 删除
//     $Students[0]->delete();
    
    // 左连接
//     echo "<br />"."<br />";
//     $c = new Criteria();
// //     $c->addDescendingOrderByColumn(StudentPeer::CREATED_AT);
//     $Students = StudentPeer::doSelectJoinTeacher($c,null,Criteria::LEFT_JOIN);
    
// //     echo '<pre>';
// //     print_r($Students);
// //     echo '</pre>';
    
//     foreach ($Students as $student)
//     {
//     	echo '<pre>';
//     	print_r($student->getTeacher());
//     	echo '</pre>';
//     	echo '<br />';
//     }
    
//     return $this->renderText("<html><body>  Database operation success !</body></html>");
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
  	$username =  $this->getRequestParameter('username');
  	
  	// 查询数据库
  	$c = new Criteria();
  	$c->add(StudentPeer::NAME, $username);
  	$student = StudentPeer::doSelectOne($c);
  	
  	if (isset($student) && !empty($student))
  	{
  		return $this->renderText("<strong>正确：存在该用户名</ strong>");
  	}else {
  		return $this->renderText("<strong>错误：不存在该用户名</ strong>");
  	}
  }
}

