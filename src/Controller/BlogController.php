<?php

namespace App\Controller;
use http\Env\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity;

class BlogController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    public function index(){
        return $this->render('index.html.twig');
    }
    /**
     * @Route("/blog/{page}", name="blog_list", requirements={"page"="\d+"})
     */
    public function list(int $page=1): Response
    {
        // ...
    }

    /**
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function show(BlogPost $post): Response
    {
        // ...
    }

    /**
     * @Route("/api/posts/{id}", methods={"PUT"})
     */
    public function edit(int $id): Response
    {
        // ... edit a post
    }

}