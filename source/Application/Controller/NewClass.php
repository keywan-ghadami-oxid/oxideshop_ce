<?php
namespace OxidEsales\Eshop\Application\Controller;

use OxidEsales\EshopAllVersions\Application\Model\NewClassModel;

class NewClass extends StartController
{

    public function getCanonicalUrl()
    {
        $newClassModel = new NewClassModel();

        $canonicalUrl = $newClassModel->getCanonicalUrl();

        return $canonicalUrl;
    }
}
