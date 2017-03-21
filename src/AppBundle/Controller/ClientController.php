<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Forms;
use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationExtension;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Dompdf\Dompdf;

class ClientController extends Controller {

  /**
   * @Route("/business", name="business")
   */
  public function businessAction(Request $request) {
    $fileUrl = null;
    $form = $this->createFormBuilder()
            ->add('name', TextType::class, ['label' => 'Imię'])
            ->add('surname', TextType::class, ['label' => 'Nazwisko'])
            ->add('save', SubmitType::class, array('label' => 'Create Task'))
            ->getForm();

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {

      $data = $form->getData();
      $fileUrl = $this->createPdf($data); 
    }
    return $this->render('pages/business.html.twig', [
                  'form' => $form->createView(),
                  'fileurl' => $fileUrl
      ]);
  }

  /**
   * @Route("/individual", name="individual")
   */
  public function individualAction(Request $request) {
    return $this->render('pages/individual.html.twig', [
    ]);
  }

  /**
   * @Route("/business-terms", name="business-terms")
   */
  public function businessTermsAction(Request $request) {
    return $this->render('pages/business-terms.html.twig', [
    ]);
  }

  /**
   * @Route("/individual-terms", name="individual-terms")
   */
  public function individualTermsAction(Request $request) {
    return $this->render('pages/individual-terms.html.twig', [
    ]);
  }

  public function createPdf($data) {
    $dompdf = new Dompdf();
    $dompdf->loadHtml(
            "<html>
    <head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <style>
      body { font-family: DejaVu Sans, sans-serif; }
    </style>
    <title>" . $data['surname'] . "_" . $data['name'] . "</title>
    </head>" .
            "<h1>Super tekst</h1>" .
            "<p>Imię:" . $data['name'] . "</p>" .
            "<p>Nazwisko:" . $data['surname'] . "</p>"
    );
    $dompdf->render();
    $output = $dompdf->output();
    file_put_contents('files/' . $data['surname'] . '_' . $data['name'] . '.pdf', $output);
    $fileUrl = 'files/' . $data['surname'] . '_' . $data['name'] . '.pdf';
    return $fileUrl;
  }

}
