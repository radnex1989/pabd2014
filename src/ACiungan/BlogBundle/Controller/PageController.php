<?php
/**
 * Created by PhpStorm.
 * User: Andrei Ciungan
 * Date: 25.05.2014
 * Time: 01:18
 */

namespace ACiungan\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ACiungan\BlogBundle\Entity\Enquiry;
use ACiungan\BlogBundle\Entity\Blog;
use ACiungan\BlogBundle\Form\EnquiryType;
use Doctrine\Common\Persistence\ObjectManager;

class PageController extends Controller {

    public function indexAction() {
        $em = $this->getDoctrine()
            ->getEntityManager();

        $blogs = $em->createQueryBuilder()
            ->select('b')
            ->from('ACiunganBlogBundle:Blog',  'b')
            ->addOrderBy('b.created', 'DESC')
            ->getQuery()
            ->getResult();

        return $this->render('ACiunganBlogBundle:Page:index.html.twig', array(
            'blogs' => $blogs
        ));
    }

    public function aboutAction() {
        return $this->render('ACiunganBlogBundle:Page:about.html.twig');
    }

    public function newentryAction() {
        $enquiry = new Enquiry();
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(new EnquiryType(), $enquiry);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $blog = new Blog();
                $title = $form->get('title')->getData();
                $blog->setTitle($title);
                $body = $form->get('body')->getData();
                $blog->setBlog($body);
                /*$image = $form->get('image')->getData();
                $blog->setImage($image);*/
                $author = $form->get('author')->getData();
                $blog->setAuthor($author);
                $tags = $form->get('tags')->getData();
                $blog->setTags($tags);
                $blog->setCreated(new \DateTime());
                $blog->setUpdated($blog->getCreated());
                $em->persist($blog);
                $em->flush();
                return $this->redirect($this->generateUrl('a_ciungan_blog_newentry'));
            }
        }

        return $this->render('ACiunganBlogBundle:Page:newentry.html.twig', array(
            'form' => $form->createView()
        ));
    }
}