<?php
namespace App\Mailer;

use Cake\Mailer\Mailer;

/**
 * Contacts mailer.
 */
class ContactsMailer extends Mailer
{

    /**
     * Mailer's name.
     *
     * @var string
     */
    static public $name = 'Contacts';

    public function sacMail($request, $emailFrom, $emailTo){

    	$this->from($emailFrom)
    		->to($emailTo)
            ->profile('qtx')
            ->emailFormat('html')
        	->template('sac')
            ->layout('sac/send')
            ->viewVars(['request' => $request])
            ->subject('Mensagem recebida via SAC - site qualitex de: ' . $request['name']);

    } 

    public function ombudsmanMail($request, $emailFrom, $emailTo){

    	$this->from($emailFrom)
    		->to($emailTo)
            ->profile('qtx')
            ->emailFormat('html')
        	->template('sac')
            ->layout('ombudsman/send')
            ->viewVars(['request' => $request])
            ->subject('Mensagem recebida via Ouvidoria - site qualitex');	
    }

}
