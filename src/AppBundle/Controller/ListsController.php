<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Task;
use AppBundle\Entity\UserLists;
use AppBundle\Form\ListType;
use AppBundle\Form\TaskType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class ListsController extends Controller
{
    /**
<<<<<<< HEAD
     *
     *
=======
>>>>>>> origin/master
     * Tworzenie nowej listy
     * @Route("/add", name="add")
     */

    public function addAction(Request $request)
    {

        // Stwórz obiekt listy
        $list = new UserLists();

        // Wygeneruj formularz
        $form = $this->createForm(ListType::class);

        // Włącz obsługe zdarzenia
        $form->handleRequest($request);

        // Jeśli forma została przesłana i jest prawidłowa
        if($form->isSubmitted() && $form->isValid()){

            // Pobierz dane z formularza
            $color = $form['color']->getData();
            $dataEnd = $form['dateExp']->getData();
            $icon = $form['icon']->getData();
            $title = $form['title']->getData();

            $dateStart = new \DateTime("now");
            $userID = $this->getUser()->getId();


            // Uzupełnij dane obiektu listy
            $list->setColor($color);
            $list->setDataEnd($dataEnd);
            $list->setDataStart($dateStart);
            $list->setFinished(false);
            $list->setIcon($icon);
            $list->setPercent(0);
            $list->setTitle($title);
            $list->setUserId($userID);

            dump($list);


            // Zainicjuj manadżera Doctrine
            $em = $this->getDoctrine()->getManager();

            // Zsynchronizuj dane z bazą (dodaj rekord)
            $em->persist($list);
            $em->flush();

            // Dodaj wiadomość Flash
            $this->addFlash(
                'success',
                'Lista utworzona!'
            );

            // Przekieruj na stronę startową
            return $this->redirectToRoute('homepage');

        }

        // Formularz nie jest wypelniony - wygeneruj stronę z formularzem
        return $this->render(':Lists/Create:create.html.twig', [
        'listCreateForm' => $form->createView(),
        ]);

    }



<<<<<<< HEAD


    /**
     *
     *
     * Usuwanie listy
     * @Route("/deleteList/{id}", name="deleteList")
     */
    public function deleteListAction($id, Request $request)
    {

        // Zainicjuj manadżera Doctrine
        $em = $this->getDoctrine()->getManager();

        // Znajdź listę w bazie
        $list = $em->getRepository('AppBundle:UserLists')->find($id);
        $tasks = $em->getRepository('AppBundle:Task')->find($id);

        // Usuń listę
        $em->remove($list);
        $em->flush();

        // Dodaj powiadomienie flash
        $this->addFlash('notice', 'Lista usunięta!');


        // replace this example code with whatever you need
        return $this->redirectToRoute('homepage');

    }








    /**
     *
     *
=======
    /**
>>>>>>> origin/master
     * Dodawanie nowych zadań do listy
     * @Route("/add_task/{id}", name="addTask")
     */
    public function addTaskAction($id, Request $request)
    {

        // Stwórz obiekt listy
        $task = new Task();

        // Wygeneruj formularz
        $form = $this->createForm(TaskType::class);

        // Włącz obsługe zdarzenia
        $form->handleRequest($request);

        // Jeśli forma została przesłana i jest prawidłowa
        if($form->isSubmitted() && $form->isValid()) {

            // Pobierz dane z formularza
            $title = $form['title']->getData();
            $numOfTasks = $form['numOfTasks']->getData();

            // Uzupełnij dane obiektu listy
            $task->setTitle($title);
            $task->setNumberOfTasks($numOfTasks);
            $task->setTasksCompleted(0);
            $task->setFinished(false);
            $task->setListId($id);

            dump($task);

            // Zainicjuj manadżera Doctrine
            $em = $this->getDoctrine()->getManager();

            // Zsynchronizuj dane z bazą (dodaj rekord)
            $em->persist($task);
            $em->flush();

            // Dodaj wiadomość Flash
            $this->addFlash(
                'success',
                'Lista utworzona!'
            );
        }

        // Formularz nie jest wypelniony - wygeneruj stronę z formularzem
        return $this->render(':Lists/Create:createTask.html.twig', [
            'taskCreateForm' => $form->createView(),
        ]);

    }
}
