<?php
// doctrine/Post.php
/**
 * @Entity @Table(name="comments")
 **/
class Post
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $num;
    /** @Column(type="integer") **/
    protected $parent;
    /** @Column(type="integer") **/
    protected $timestamp;
    /** @Column(type="integer") **/
    protected $lasthit;
    /** @Column(type="text") **/
    protected $ip;
    /** @Column(type="text") **/
    protected $date;
    /** @Column(type="text") **/
    protected $name;
    /** @Column(type="text") **/
    protected $trip;
    /** @Column(type="text") **/
    protected $email;
    /** @Column(type="text") **/
    protected $subject;
    /** @Column(type="text") **/
    protected $password;
    /** @Column(type="text") **/
    protected $comment;
    /** @Column(type="text") **/
    protected $image;
    /** @Column(type="integer") **/
    protected $size;
    /** @Column(type="text") **/
    protected $md5;
    /** @Column(type="integer") **/
    protected $width;
    /** @Column(type="integer") **/
    protected $height;
    /** @Column(type="text") **/
    protected $thumbnail;
    /** @Column(type="text") **/
    protected $tn_width;
    /** @Column(type="text") **/
    protected $tn_height;

    public function getId()
    {
        return $this->num;
    }

    public function getPost()
    {
        return $this->comment;
    }
}
