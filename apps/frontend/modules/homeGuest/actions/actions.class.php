<?php
class homeGuestActions extends sfActions
{
  public function executeIndex($request)
  {
    // First go to this web, user is a guest
    //$this->getUseir()->setAuthenticated(false);
    // Test Class
    $myPhone = Phone::getInstance();
    $TestParams = array(
        'id'=>1,
        'class'=>$myPhone
    );
    echo $TestParams['class']->price."<br />";
    $yourPhone = $TestParams['class'];
    $yourPhone->price = $yourPhone->price+1;
    echo $TestParams['class']->price."<br />";

    $this->card_list = array('VISA'=>'Visa','MAST'=>'Master','AMEX'=>'American Express');
    return sfView::SUCCESS;
  }

  public function executeLogin($request)
  {
    $this->UserName =  $this->getRequestParameter('username');
    $this->password =  $this->getRequestParameter('password');
    if ($this->UserName==='roy' && $this->password==='10093633')
    {
      $this->getUser()->setAuthenticated(true);
      return sfView::SUCCESS;
    } else {
      $this->getUser()->setAuthenticated(false);
      return sfView::ERROR;
    } 
  }


  public function executeLogout($request)
  {
    $this->getUser()->setAuthenticated(false);
    $this->redirect('@homepage');
  }

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

  public function postExecute()
  {
    //$this->postexecute = true;
  }
}

