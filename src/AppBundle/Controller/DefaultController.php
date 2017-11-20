<?php
// src/AppBundle/Controller/DefaultControler.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Tests\Command\CacheClearCommand\Fixture\TestAppKernel;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Form\TaskType;
use AppBundle\Entity\Task;
use Psr\Log\LoggerInterface;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $tasks = $this->getDoctrine()->getRepository('AppBundle:Task')->findAll();
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'tasks' => $tasks
        ]);
    }

    /**
     * @Route("/add-task", name="addTask")
     */
    public function newAction(Request $request)
    {
        $task = new Task();

        $form = $this->createForm(TaskType::class, $task);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $task = $form->getData();

            $logger = $this->get('logger');
$logger->info('A new task has been created!!!');
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();

            $message = \Swift_Message::newInstance()
                ->setSubject('hello swift message')
                ->setFrom('info@drupalchilli.com')
                ->setTo('blandonxu@gmail.com')
                ->setBody(
                    'this is content...no parameter config',
                    'text/plain'
                )
            ;

            $this->get('mailer')->send($message);
$logger->error('something wrong happened..00.');
            return $this->redirectToRoute('taskSaved');
        }


        return $this->render('default/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/task-saved", name="taskSaved")
     */
    public function taskSaved()
    {
        return $this->render('default/save.html.twig');
    }

    /**
     * @Route("/admin")
     */
    public function adminAction()
    {
        return new Response('<html><body>Admin page!</body></html>');
    }
}
