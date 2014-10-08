<?php

/**
 * @author Judzhin Miels <info[woof-woof]msbios.com>
 */

namespace App;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Doctrine\ORM\EntityManager;

abstract class AbstractResource {

    /**
     * @var EntityManager
     */
    private $entityManager = null;

    /**
     * 
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager) {
        $this->entityManager = $entityManager;
    }

    /**
     * 
     * @return EntityManager
     */
    public function getEntityManager() {
        return $this->entityManager;
    }

}
