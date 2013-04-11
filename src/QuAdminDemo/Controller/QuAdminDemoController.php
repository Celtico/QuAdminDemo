<?php
/**
 * @Author: Cel Ticó Petit
 * @Contact: cel@cenics.net
 * @Company: Cencis s.c.p.
 */

namespace QuAdminDemo\Controller;

use QuAdmin\Controller\AbstractController;

class QuAdminDemoController extends AbstractController
{

    protected  $qu_admin_service;
    protected  $qu_web_demo_model;


    public function indexAction(){
        $this->getQuAdminService();
        $quAdmin = $this->qu_admin_service->getIndex();
        return $quAdmin->getViewModel();
    }


    public function QuAdminTableAjaxAction()
    {
        $this->getQuAdminService();
        $quAdmin = $this->qu_admin_service->getAjax();
        return $quAdmin->getViewModel();
    }


    public function addAction()
    {
        $this->getQuAdminService();
        $quAdmin = $this->qu_admin_service->getAdd();
        return $quAdmin->getViewModel();
    }


    public function editAction()
    {
        $this->getQuAdminService();
        $quAdmin = $this->qu_admin_service->getEdit();
        return $quAdmin->getViewModel();
    }



    public function duplicateAction()
    {
        $this->getQuAdminService();
        $quAdmin = $this->qu_admin_service->getDuplicate();
        return $quAdmin->getViewModel();
    }


    public function deleteAction()
    {
        $this->getQuAdminService();
        $quAdmin = $this->qu_admin_service->getDelete();
        return $quAdmin->getViewModel();
    }

    public function uploadAction()
    {
        $this->getQuAdminService();
        $quAdmin = $this->qu_admin_service->getUpload();
        return $quAdmin->getViewModel();
    }
    public function loadAction()
    {
        $this->getQuAdminService();
        $quAdmin = $this->qu_admin_service->getUpload();
        return $quAdmin->loadAction();
    }
    public function removeAction()
    {
        $this->getQuAdminService();
        $quAdmin = $this->qu_admin_service->getUpload();
        return $quAdmin->removeAction();
    }


    public function getQuAdminService(){

        $this->qu_admin_service = $this->getServiceLocator()->get('qu_admin_service');
        $this->qu_admin_service->setQuAdminModelOptions(
            $this->getServiceLocator()->get('qu_web_demo_model')
        );

        return $this;
    }

}