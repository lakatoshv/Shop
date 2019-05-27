<?php

class CustomerController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $storage = new Zend_Auth_Storage_Session();
        $data = $storage->read();
        $this->view->current_user = $data; 
        $users = new Model_DbTable_Users();
        $user = $users->getCustomer("`id`", $data->id); 
        $this->view->user = $user[0];
        $this->view->profile_img = "";

        $ordersTBL = new Shop_Model_DbTable_Orders();
        $this->view->allOrders = $ordersTBL->getOrdersForUser($user[0]["email"]);
        $this->view->confirmedOrders = $ordersTBL->getOrdersForUser($user[0]["email"], ["confirmed", "1"]);
        $this->view->unconfirmedOrders = $ordersTBL->getOrdersForUser($user[0]["email"], ["confirmed", "0"]);
        $this->view->payedOrders = $ordersTBL->getOrdersForUser($user[0]["email"], ["payed", "1"]);
        $this->view->unpayedOrders = $ordersTBL->getOrdersForUser($user[0]["email"], ["payed", "0"]);
    }

    public function loginAction()
    {
        $storage = new Zend_Auth_Storage_Session();
        $user = $storage->read();
        if($user){
            $this->_redirect('customer/index');
        }
        $users = new Model_DbTable_Users();
        $form = new Form_Login();
        $this->view->form = $form;
        if($this->getRequest()->isPost()){
            if($form->isValid($_POST)){
                $data = $form->getValues();
                $auth = Zend_Auth::getInstance();
                $authAdapter = new Zend_Auth_Adapter_DbTable($users->getAdapter(),'customers');
                $authAdapter->setIdentityColumn('email')
                            ->setCredentialColumn('password');
                $authAdapter->setIdentity($data['email'])
                            ->setCredential($data['password']);
                $result = $auth->authenticate($authAdapter);
                if($result->isValid()){
                    $storage = new Zend_Auth_Storage_Session();
                    $storage->write($authAdapter->getResultRowObject());
                    $this->_redirect('customer/index');
                } 
                else {
                    $this->view->errorMessage = "Неправильний Нікнейм або Пароль! Будь ласка спробуйте знову!";
                }         
            }
        }
    }

    public function logoutAction()
    {
        $storage = new Zend_Auth_Storage_Session();
        $storage->clear();
        $this->_redirect('customer/login');
    }

    public function signupAction()
    {
        $users = new Model_DbTable_Users();
        $form = new Form_Registration();
        $this->view->form=$form;
        if($this->getRequest()->isPost()){
            if($form->isValid($_POST)){
                $data = $form->getValues();
                if($data['password'] != $data['confirmPassword']){
                    $this->view->errorMessage = "Пароль і Підтвердження паролю не співпадають.";
                    return;
                }
                if($users->checkUnique($data['email'])){
                    $this->view->errorMessage = "Користувач з таким нікнеймом вже існує.";
                    return;
                }
                unset($data['confirmPassword']);
                $users->insert($data);
                $this->_redirect('customer/login');
            }
        }
        
    }

    public function updateAction()
    {
        Zend_Session::start();
        $storage = new Zend_Auth_Storage_Session();
        $session = new Zend_Session_Namespace('Customer');

        $users = new Model_DbTable_Users();

        $user = $storage->read();

        $current_user = $users->getCustomer("`id`", $user->id); 
        $this->view->user = $current_user[0];
        if(!$user){
            $this->_redirect('customer/login');
        }
        $session->firstname = $user->firstname;
        $session->lastname = $user->lastname;
        $session->email = $user->email;
        $session->city = $user->city;
        $form = new Form_UpdateCustomerData();
        $this->view->form=$form;
        if($this->getRequest()->isPost()){
            if($form->isValid($_POST)){
                $data = $form->getValues();
                $data["password"] = $current_user[0]["password"];
                $where = $users->getAdapter()->quoteInto('id = ?', $user->id);
                $users->update($data, $where);
                $this->_redirect('customer');
            }
        }
    }


}











