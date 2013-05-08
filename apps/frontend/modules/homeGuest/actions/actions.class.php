<?php
class homeGuestActions extends sfActions
{
  public function executeIndex($request)
  {
    $this->card_list = array('VISA'=>'Visa','MAST'=>'Master','AMEX'=>'American Express');
    return sfView::SUCCESS;
  }

  public function executeLogout($request)
  {
    $this->redirectIfLoggedIn();
    return sfView::SUCCESS;
  }

  private function redirectIfLoggedIn()
  {
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
}

