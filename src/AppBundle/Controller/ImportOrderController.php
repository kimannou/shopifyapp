<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ImportOrder;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Importorder controller.
 *
 * @Route("orders")
 */
class ImportOrderController extends Controller
{
    /**
     * Lists all importOrder entities.
     *
     * @Route("/", name="orders_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $importOrders = $em->getRepository('AppBundle:ImportOrder')->findAll();

        return $this->render('importorder/index.html.twig', array(
            'importOrders' => $importOrders,
        ));
    }

    /**
     * Creates a new importOrder entity.
     *
     * @Route("/new", name="orders_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $importOrder = new Importorder();
        $form = $this->createForm('AppBundle\Form\ImportOrderType', $importOrder);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {$file = $importOrder->getFile();

            $file = $importOrder->getFile();
            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // Move the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('importorder_directory'),
                $fileName
            );

            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $importOrder->setFile($fileName);
            $em = $this->getDoctrine()->getManager();
            $em->persist($importOrder);
            $em->flush();

            return $this->redirectToRoute('orders_show', array('id' => $importOrder->getId()));
        }

        return $this->render('importorder/new.html.twig', array(
            'importOrder' => $importOrder,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a importOrder entity.
     *
     * @Route("/{id}", name="orders_show")
     * @Method("GET")
     */
    public function showAction(ImportOrder $importOrder)
    {
        $deleteForm = $this->createDeleteForm($importOrder);

        return $this->render('importorder/show.html.twig', array(
            'importOrder' => $importOrder,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing importOrder entity.
     *
     * @Route("/{id}/edit", name="orders_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ImportOrder $importOrder)
    {
        $deleteForm = $this->createDeleteForm($importOrder);
        $editForm = $this->createForm('AppBundle\Form\ImportOrderType', $importOrder);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('orders_edit', array('id' => $importOrder->getId()));
        }

        return $this->render('importorder/edit.html.twig', array(
            'importOrder' => $importOrder,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a importOrder entity.
     *
     * @Route("/{id}", name="orders_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ImportOrder $importOrder)
    {
        $form = $this->createDeleteForm($importOrder);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($importOrder);
            $em->flush();
        }

        return $this->redirectToRoute('orders_index');
    }

    /**
     * Creates a form to delete a importOrder entity.
     *
     * @param ImportOrder $importOrder The importOrder entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ImportOrder $importOrder)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('orders_delete', array('id' => $importOrder->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
