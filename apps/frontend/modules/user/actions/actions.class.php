<?php

class userActions extends sfActions
{

  public function executeNews(sfWebRequest $request)
  {
    $this->forward404Unless($this->getUser()->getGuardUser());
    $this->blog_posts=$this->getUser()->getGuardUser()->posts;
  }

}

