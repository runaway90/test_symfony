<?php

namespace App\Controller\Linker;

use App\Entity\Link;
use Ramsey\Uuid\Uuid;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class LinkController extends AbstractController
{
    public $uu;
    /**
     * @Route("/link", name="link")
     */
    public function index(Request $request)
    {
        $uu = [];
        $www = new VisitorController();
        //$www->new(); //тут создать нового визитора
            $uuid = Uuid::uuid4();
            $visitor = $uuid->toString();

//          $uu = $www;
                  print_r($www);//die();
        $www->setVisitor(5);
        print_r($www);

        print_r(new VisitorController());
        //die();
        $link = new Link();
//        $link->setName('Enter name');
//        $link->setDescription('Description');
//        $link->setStatus('Status');
//        $link->setUrlAddress('url');

        $form = $this->createFormBuilder($link)
            ->add('name', TextType::class)
            ->add('url_address', TextType::class)
            ->add('status', TextType::class)
            ->add('description', TextType::class)

            ->add('dueDate', DateType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Link'))
            ->getForm();
//

//        if ($form->isSubmitted()) {
            // perform some action...

if ($request->isMethod('POST')) {

    $entityManager = $this->getDoctrine()->getManager();

        $data = $request->request->all();
        $name = $data['form']['name'];
        $description = $data['form']['description'];
        $status = $data['form']['status'];
        $url = $data['form']['url_address'];

            $link = new Link();
            $link->setName($name);
            $link->setDescription($description);
            $link->setStatus($status);
            $link->setUrlAddress($url);

            // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($link);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();


            return $this->redirectToRoute('link_post');
        }
        $array =array(1=>[0=>1],[1 =>2]);
//return $this->redirectToRoute('link_post');
        return $this->render('link/index.html.twig', array(
            'form' => $form->createView(),
            'table_link' => [1,2,3,4,5,6,7,8],
            'array_link' => $array
        ));


//        $request = Request::createFromGlobals();
//        $request->setMethod('post');
//return $this->json([
//            'message' => 'Welcome to your new controller!',
//            '1' => $request->getMethod()
//        ]);
//        return $this->render('link/index.html.twig', [
//            'controller_name' => $request,
//        ]);
    }
/**
     * @Route("/link_post", name="link_post")
     */
    public function post(Request $request){
        return $this->json([
            'message' => $request->getContent()
        ]);
    }
}
