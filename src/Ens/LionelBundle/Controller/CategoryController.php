<?php
namespace Ens\LionelBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ens\LionelBundle\Entity\Category;

/**
 * Category controller.
 *
 */
class CategoryController extends Controller
{
    public function showAction($slug)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $category = $em->getRepository('EnsLionelBundle:Category')->findOneBySlug($slug);

        if (!$category) {
            throw $this->createNotFoundException('Unable to find Category entity.');
        }

        $category->setActiveJobs($em->getRepository('EnsLionelBundle:Job')->getActiveJobs($category->getId()));

        return $this->render('category/show.html.twig', array(
            'category' => $category,
        ));
    }
}