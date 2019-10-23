<?php


namespace App\Entity;


trait Timestamps
{

    /**
     * @ORM\Column(type="datetime")
     */
    use Timestamps;
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */

    private $updatedAt;


    /**
     * @ORM\PrePersist()
     */


    public function createdAt(){

        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();


    }


    /**
     * @ORM\PreUpdate()
     */

    public function updateAt(){
        $this->updatedAt = new \DateTime();

    }

}