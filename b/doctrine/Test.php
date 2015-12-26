<?php
// src/Test.php
/**
 * @Entity @Table(name="test")
 **/
class Test
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    /** @Column(type="string") **/
    protected $name;

    // .. (other code)
}
