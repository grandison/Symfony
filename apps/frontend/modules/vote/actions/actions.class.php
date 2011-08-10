<?php

/**
 * post actions.
 *
 * @package    blog
 * @subpackage post
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class voteActions extends sfActions
{

  public function executeVote(sfWebRequest $request)
  {
    $this->rating="Вы уже голосовали";

    if (!$this->getUser()->getGuardUser()) return;

    $vote = Doctrine_Core::getTable('BlogPostVote')->createQuery('v')
    ->where('v.author_id = ? AND v.post_id = ?',
    array($this->getUser()->getGuardUser()->id,$request->getParameter('post_id')))
    ->execute();

    if($vote->count()==0){

      $v=new BlogPostVote();

      $v->author_id=$this->getUser()->getGuardUser()->id;

      $v->post_id=$request->getParameter('post_id');

      $v->save();

      $post = Doctrine_Query::create()
      ->from('BlogPost p')
      ->where('p.id = ?', $request->getParameter('post_id'));

      $post = $post->fetchOne();

      $post->rating=$post->rating+1;

      $this->rating=$post->rating;

      $post->save();


      }
  }

}

