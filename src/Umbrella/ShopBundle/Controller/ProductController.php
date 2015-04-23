<?php
// ProductController.php
namespace Umbrella\ShopBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Umbrella\ShopBundle\Entity\Product;
use Umbrella\ShopBundle\Form\ProductType;

/**
 * Product controller.
 *
 * @Route("/product")
 */
class ProductController extends Controller
{
    /**
     * Lists all Product entities.
     *
     * @Route("/product", name="product")
     * @Template("UmbrellaShopBundle:Product:index_product.html.twig")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UmbrellaShopBundle:Product')->findAll();
        $users = $em->getRepository('UmbrellaShopBundle:User')->findAll();

        return array('entities' => $entities,
                     'users' => $users );
    }

    /**
     * Displays a form to create a new Product entity.
     * 
     * @Route("/new", name="product_new")
     * @Template("UmbrellaShopBundle:Product:new_product.html.twig")
     */
    public function newAction()
    {
        $entity = new Product();
        $form   = $this->createForm(new ProductType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Product entity.
     *
     * @Route("/createProduct", name="product_create")
     */
    public function createAction(Request $request)
    {
        $entity  = new Product();
        $form  = $this->createForm(new ProductType(), $entity);
        
        if ($request->getMethod() == 'POST') {
            
            $form->bind($request);
            
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();
            
                $this->get('session')->getFlashBag()->add('notice', 'Add product success!');
                return $this->redirect($this->generateUrl('umbrella_shop_single', array('product_id' => $entity->getId())));
            }
        }else {
            throw $this->createNotFoundException('Unable to find POST request.');
        }
    }

    /**
     * Displays a form to edit an existing Product entity.
     *  
     * @Route("/editProduct/{product_id}", name="product_edit")
     * @Template("UmbrellaShopBundle:Product:edit_product.html.twig")
     */
    public function editAction($product_id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UmbrellaShopBundle:Product')->find($product_id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Product entity.');
        }

        $editForm = $this->createForm(new ProductType(), $entity);
        

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        );
    }

    /**
     * Edits an existing Product entity.
     *
     * @Route("/updateProduct/{product_id}", name="product_update")
     */
    public function updateAction($product_id)
    {
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UmbrellaShopBundle:Product')->find($product_id);
            
            if (!$entity) {
            throw $this->createNotFoundException('Unable to find Product entity.');
            }

            $editForm   = $this->createForm(new ProductType(), $entity);
            $editForm->bind($request);

            if ($editForm->isValid()) {
                $em->persist($entity);
                $em->flush();
                
                $this->get('session')->getFlashBag()->add('notice', 'Update product success!');
                return $this->redirect($this->generateUrl('umbrella_shop_single', array('product_id' => $entity->getId())));
            }
        }else {
            throw $this->createNotFoundException('Unable to find POST request.');
        }
    }

    /**
     * Deletes a Product entity.
     *
     * @Route("/deleteProduct/{product_id}", name="product_delete")
     */
    public function deleteAction($product_id)
    {
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('UmbrellaShopBundle:Product')->find($product_id);
        $form    = $this->createForm(new ProductType(), $entity);
        $form->bind($request);

        if (!$entity) {
                throw $this->createNotFoundException('Unable to find Product entity.');
        }

        $em->remove($entity);
        $em->flush();
        

        $this->get('session')->getFlashBag()->add('notice', 'Delete product success!');
        return $this->redirect($this->generateUrl('umbrella_shop_welcom'));
    }

}
