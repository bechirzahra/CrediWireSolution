<?php

namespace MyApp\CrediWireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LogonHistory
 * @Entity
 * @ORM\Table(name="LogonHistory")
 * @ORM\Entity(repositoryClass="CrediWireBundle\Entity\LogonHistoryRepository")
 */
class LogonHistory
{
    /**
     * @var integer
     * @ORM\Column(name="logonHistory_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     * @ORM\Column(name="logonProject", type="datetime")
     */
    private $logonProject;

    /**
     * @var \DateTime
     * @ORM\Column(name="logoutProject", type="datetime", nullable=true)
     */
    private $logoutProject;
    
    /**
     * @var integer
     * @ORM\Column(name="project_id", type="integer")
     */
    private $project_id;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set logonProject
     *
     * @param \DateTime $logonProject
     * @return LogonHistory
     */
    public function setLogonProject($logonProject)
    {
        $this->logonProject = $logonProject;

        return $this;
    }

    /**
     * Get logonProject
     *
     * @return \DateTime 
     */
    public function getLogonProject()
    {
        return $this->logonProject;
    }

    /**
     * Set logoutProject
     *
     * @param \DateTime $logoutProject
     * @return LogonHistory
     */
    public function setLogoutProject($logoutProject)
    {
        $this->logoutProject = $logoutProject;

        return $this;
    }

    /**
     * Get logoutProject
     *
     * @return \DateTime 
     */
    public function getLogoutProject()
    {
        return $this->logoutProject;
    }
    

    /**
     * @var \MyApp\CrediWireBundle\Entity\Project
     */
    private $Project;


    /**
     * Set Project
     *
     * @param \MyApp\CrediWireBundle\Entity\Project $project
     * @return LogonHistory
     */
    public function setProject(\MyApp\CrediWireBundle\Entity\Project $project = null)
    {
        $this->Project = $project;

        return $this;
    }

    /**
     * Get Project
     *
     * @return \MyApp\CrediWireBundle\Entity\Project 
     */
    public function getProject()
    {
        return $this->Project;
    }
    
    function getProject_id() {
        return $this->project_id;
    }

    function setProject_id($project_id) {
        $this->project_id = $project_id;
    }


}
