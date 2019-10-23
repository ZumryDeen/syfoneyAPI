<?php
//
//namespace App\Entity;
//
//use Doctrine\Common\Collections\ArrayCollection;
//use Doctrine\Common\Collections\Collection;
//use Doctrine\ORM\Mapping as ORM;
//
///**
// * @ORM\Entity(repositoryClass="App\Repository\NoteRepository")
// * @ORM\HasLifecycleCallbacks()
// */
//class Note
//{
//
//    use Timestamps;
//    /**
//     * @ORM\Id()
//     * @ORM\GeneratedValue()
//     * @ORM\Column(type="integer")
//     */
//    private $id;
//
//    /**
//     * @ORM\Column(type="string", length=255)
//     */
//    private $note;
//
//
//    /**
//     * @ORM\OneToMany(targetEntity="App\Entity\Task", mappedBy="notes")
//     */
//
//    // this forieng key is from App/Entity/Task
//    private $task;
//
//    public function __construct()
//    {
//        $this->task = new ArrayCollection();
//    }
//
//    public function getId(): ?int
//    {
//        return $this->id;
//    }
//
//    public function getNote(): ?string
//    {
//        return $this->note;
//    }
//
//    public function setNote(string $note): self
//    {
//        $this->note = $note;
//
//        return $this;
//    }
//
//    /**
//     * @return Collection|Task[]
//     */
//    public function getTask(): Collection
//    {
//        return $this->task;
//    }
//
//    public function addTask(Task $task): self
//    {
//        if (!$this->task->contains($task)) {
//            $this->task[] = $task;
//            $task->setNotes($this);
//        }
//
//        return $this;
//    }
//
//    public function removeTask(Task $task): self
//    {
//        if ($this->task->contains($task)) {
//            $this->task->removeElement($task);
//            // set the owning side to null (unless already changed)
//            if ($task->getNotes() === $this) {
//                $task->setNotes(null);
//            }
//        }
//
//        return $this;
//    }
//}
