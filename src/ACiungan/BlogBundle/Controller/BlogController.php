<?php
/**
 * Created by PhpStorm.
 * User: Andrei Ciungan
 * Date: 25.05.2014
 * Time: 21:27
 */

namespace ACiungan\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller {

    /**
     * Show a blog entry
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $blog = $em->getRepository('ACiunganBlogBundle:Blog')->find($id);

        if (!$blog) {
            throw $this->createNotFoundException('Unable to find Blog post.');
        }

        $comments = $em->getRepository('ACiunganBlogBundle:Comment')
            ->getCommentsForBlog($blog->getId());

        return $this->render('ACiunganBlogBundle:Blog:show.html.twig', array(
            'blog'      => $blog,
            'comments'  => $comments
        ));
    }
} 