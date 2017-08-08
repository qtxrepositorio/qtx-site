<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\MailerAwareTrait;

/**
 * Contacts Controller
 *
 *
 * @method \App\Model\Entity\Contact[] paginate($object = null, array $settings = [])
 */
class ContactsController extends AppController
{

	use MailerAwareTrait;

    public function location(){}
    public function phoneContacts(){}

    public function safisationSearch(){}

    public function sac($id = null){

    	if ($this->request->is('post')) {
    		$this->getMailer('Contacts')->send('sacMail',
    			[
    				$this->request->data,
    				$this->request->data['email'],
    				'desenvolvimento@qualitex.com.br' // sac
    			]);
			return $this->redirect(
	            ['controller' => 'Answer', 'action' => 'answer_sac']
	        );
    	}

    }

    public function ombudsman($id = null){

    	if ($this->request->is('post')) {
    		$this->getMailer('Contacts')->send('ombudsmanMail',
    			[
    				$this->request->data,
    				$this->request->data['email'],
    				'desenvolvimento@qualitex.com.br' //ouvidoria
    			]);
			return $this->redirect(
	            ['controller' => 'Answer', 'action' => 'answer_ombudsman']
	        );
    	}
    }

    public function workHere($id = null){

        if ($this->request->is('post')) {

            $this->getMailer('Contacts')->send('workHereMail',
                [
                    $this->request->data,
                    $this->request->data['email'],
                    'desenvolvimento@qualitex.com.br'
                ]);

			return $this->redirect(
				['controller' => 'Answer', 'action' => 'answer_work_here']
			);

        }
    }

}
