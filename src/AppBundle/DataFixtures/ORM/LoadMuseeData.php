<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Musee;
use Doctrine\Common\Collections\ArrayCollection;

class LoadMuseeData implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
    $url="http://opendata.paris.fr/explore/dataset/liste-musees-de-france-a-paris/download/?format=json&timezone=Europe/Berlin";
    $contents = file_get_contents($url);
    $contents = utf8_encode($contents);
    $json = json_decode($contents, true);
  //  echo "aaaaaaaaaaaaaaaaa";

    foreach ($json as $object)
    {
//        echo "BBBBB";

        $fields = $object['fields'];
        if (isset($fields['coordonnees_']))
        {
  //          echo "CCC";

            $musee = new Musee();
    //        echo "DDD";

           // $musee->setReouverture($fields['']);
            $manager->persist($musee);

            if (isset($fields['fermeture_annuelle'])) {
                $musee->setFermetureAnnuelle($fields['fermeture_annuelle']);
            }
            if (isset($fields['periode_ouverture'])) {
                $musee->setPeriodesOuverture($fields['periode_ouverture']);
            }if (isset($fields['nom_du_musee'])) {
                $musee->setNom($fields['nom_du_musee']);
            }
            if (isset($fields['coordonnees_'])) {
                $musee->setCoordonnees(implode(";", $fields['coordonnees_']));
            }
            if (isset($fields['adr'])) {
                $musee->setAdresse($fields['adr']);
            }
            if (isset($fields['cp'])) {
                $musee->setCodePostal($fields['cp']);
            }
            if (isset($fields['ville'])) {
                $musee->setVille($fields['ville']);
            }
            if (isset($fields['sitweb'])) {
                $musee->setSiteWeb($fields['sitweb']);
            }
            if (isset($fields['ferme'])) {

                switch ($fields['ferme']) {
                    case 'OUI':
                    $musee->setStatut(Musee::FERME);
                    break;

                    case 'NON':
                    $musee->setStatut(Musee::OUVERT);
                    break;
                }
            }



        }

    }

    $manager->flush();
}
}

