<?php
namespace App\Controllers;
class Connection extends BaseController
{
    public function index(): string
    {
        return view('templates/header').view("login_form").view('templates/footer');
    }
    public function attemptLogin() 
    {
        $joueursModel = new \App\Models\utilisateurs();

        $values = $this->request->getPost(['login', 'password']);
            return $this->LoginUser();
        
       $rechercheUtilisateurs = $utilisateursModel->getUtilisateursByMatricule($values['login']);

       if(isset($rechercheUtilisateurs) && $rechercheUtilisateurs['login_utilisateurs'] === $values['mdp_utilisateurs'])
        return redirect()->to("home");
        else {
        return redirect()->to('login');
       }
    }
    private function LoginUser(?object $user = null)
	{
            $session = session();
            $session->set([
                'username' => isset($user) ? ($user['login_utilisateurs'] . strtoupper($user['mdp_utilisateurs'])) : 'admin',
                'loggedIn' => true
            ]);
            return redirect()->to("home");    
        }
    }