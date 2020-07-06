<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Mailer\Email;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class ContatoController extends AppController
{
    public $uses = array();

    /**
     * Displays a view
     *
     * @return void|\Cake\Network\Response
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function index()
    {
        $erroMsg = false;
        $this->viewBuilder()->layout("interna");
        if(!empty($this->request->data)){
            
            foreach ($this->request->data as $key => $value) {
                if($value==''){
                    $erroMsg = "Todos os campos devem ser preenchidos";
                }
            }
            // pr($this->request->data);
            if($erroMsg==false){
                $to = "germano.carv@gmail.com";
                
                /*$headers = "From: {$this->request->data["email"]}";
                $subject = $this->request->data["assunto"];
                $body = "Name: {$this->request->data["nome"]}\n\n"
                    . "Email: {$this->request->data["email"]}\n\n"
                    . "Subject: {}\n\n"
                    . "Message: ".
                    ;*/

                $email = new Email('default');
                $ok = $email->from([$this->request->data["email"] => $this->request->data["nome"]])
                        ->to($to)
                        ->subject($this->request->data["assunto"])
                        ->send(nl2br($this->request->data["mensagem"]));

                // $ok = (mail($to, $this->request->data["assunto"], $body, $headers, "-r".$this->request->data["email"]));
                if(!$ok){
                    $erroMsg="Ocorreu um erro.";
                }

                $this->set(compact("ok"));
            }
        }
        $this->set(compact("erroMsg"));
    }
}
