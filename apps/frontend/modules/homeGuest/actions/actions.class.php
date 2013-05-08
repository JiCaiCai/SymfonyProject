<?php
class homeGuestActions extends sfActions
{
  public function executeIndex($request)
  {
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
}

