<?php

namespace App\Controller\Admin;

use App\Entity\Client;
use App\Entity\Cours;
use App\Entity\Formateur;
use App\Entity\Lecon;
use App\Entity\PaiementClient;
use App\Entity\PaiementFormateur;
use App\Entity\Permis;
use App\Entity\Vehicule;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Entity;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//use b/src/Controller/Admin/DashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity as ConfigurationEntity;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        //return parent::index();
        //return parent::index();
        $routeBuilder = $this->get(CrudUrlGenerator::class)->build();
        $url = $routeBuilder->setController(VehiculeCrudController::class)->generateUrl();

        return $this->redirect($url);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('AutoEcole');
    }

    public function configureMenuItems(): iterable
    {
        //yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        //yield MenuItem::linkToCrud('The Label', 'fas fa-list', Entity::class);
        -        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linktoRoute('Back to the website', 'fas fa-home', 'homepage');
        yield MenuItem::linkToCrud('Vehicule', 'fas fa-car', Vehicule::class);
        yield MenuItem::linkToCrud('Cours', 'fas fa-folder-open', Cours::class);
        yield MenuItem::linkToCrud('Formateur', 'fas fa-chalkboard-teacher', Formateur::class);
        yield MenuItem::linkToCrud('Client', 'fas fa-user-graduate', Client::class);
        //yield MenuItem::linkToCrud('Client', 'fas fa-user-graduate', Client::class);
        yield MenuItem::linkToCrud('Leçon', 'fas fa-comments', Lecon::class);
        yield MenuItem::linkToCrud('Paiement client', 'fas fa-hand-holding-usd', PaiementClient::class);
        yield MenuItem::linkToCrud('Paiement formateur', 'fas fa-money-bill-alt', PaiementFormateur::class);
        yield MenuItem::linkToCrud('Permis', 'fas fa-comments', Permis::class);
    }
}
