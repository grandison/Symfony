<?php

/**
 * BaseBlogPost
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $author_id
 * @property string $title
 * @property text $source
 * @property integer $rating
 * @property sfGuardUser $Author
 * @property Doctrine_Collection $votes
 * 
 * @method integer             getId()        Returns the current record's "id" value
 * @method integer             getAuthorId()  Returns the current record's "author_id" value
 * @method string              getTitle()     Returns the current record's "title" value
 * @method text                getSource()    Returns the current record's "source" value
 * @method integer             getRating()    Returns the current record's "rating" value
 * @method sfGuardUser         getAuthor()    Returns the current record's "Author" value
 * @method Doctrine_Collection getVotes()     Returns the current record's "votes" collection
 * @method BlogPost            setId()        Sets the current record's "id" value
 * @method BlogPost            setAuthorId()  Sets the current record's "author_id" value
 * @method BlogPost            setTitle()     Sets the current record's "title" value
 * @method BlogPost            setSource()    Sets the current record's "source" value
 * @method BlogPost            setRating()    Sets the current record's "rating" value
 * @method BlogPost            setAuthor()    Sets the current record's "Author" value
 * @method BlogPost            setVotes()     Sets the current record's "votes" collection
 * 
 * @package    blog
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseBlogPost extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('blog_post');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'unsigned' => true,
             'length' => 4,
             ));
        $this->hasColumn('author_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('title', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('source', 'text', null, array(
             'type' => 'text',
             'notnull' => true,
             ));
        $this->hasColumn('rating', 'integer', null, array(
             'type' => 'integer',
             'default' => 0,
             'notnull' => true,
             ));

        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('sfGuardUser as Author', array(
             'local' => 'author_id',
             'foreign' => 'id'));

        $this->hasMany('BlogPostVote as votes', array(
             'local' => 'id',
             'foreign' => 'post_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}