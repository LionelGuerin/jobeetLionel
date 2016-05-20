<?php

namespace Ens\LionelGuerinBundle\Entity;

/**
 * Category
 */
class Category
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $jobs;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $category_affiliates;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->jobs = new \Doctrine\Common\Collections\ArrayCollection();
        $this->category_affiliates = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set name
     *
     * @param string $name
     *
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add job
     *
     * @param \Ens\LionelGuerinBundle\Entity\Job $job
     *
     * @return Category
     */
    public function addJob(\Ens\LionelGuerinBundle\Entity\Job $job)
    {
        $this->jobs[] = $job;

        return $this;
    }

    /**
     * Remove job
     *
     * @param \Ens\LionelGuerinBundle\Entity\Job $job
     */
    public function removeJob(\Ens\LionelGuerinBundle\Entity\Job $job)
    {
        $this->jobs->removeElement($job);
    }

    /**
     * Get jobs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getJobs()
    {
        return $this->jobs;
    }

    /**
     * Add categoryAffiliate
     *
     * @param \Ens\LionelGuerinBundle\Entity\CategoryAffiliate $categoryAffiliate
     *
     * @return Category
     */
    public function addCategoryAffiliate(\Ens\LionelGuerinBundle\Entity\CategoryAffiliate $categoryAffiliate)
    {
        $this->category_affiliates[] = $categoryAffiliate;

        return $this;
    }

    /**
     * Remove categoryAffiliate
     *
     * @param \Ens\LionelGuerinBundle\Entity\CategoryAffiliate $categoryAffiliate
     */
    public function removeCategoryAffiliate(\Ens\LionelGuerinBundle\Entity\CategoryAffiliate $categoryAffiliate)
    {
        $this->category_affiliates->removeElement($categoryAffiliate);
    }

    /**
     * Get categoryAffiliates
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategoryAffiliates()
    {
        return $this->category_affiliates;
    }
}
