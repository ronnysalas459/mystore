<?php


namespace Marcgento\ModuloBasico\Controller\Index;


class Subscription extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $subscription = $this->_objectManager->create('Marcgento\ModuloBasico\Model\Subscription');

        $subscription->setFirstname('Ronny');
        $subscription->setLastname('Salas');
        $subscription->setEmail('ronnysalas459@gmail.com');
        $subscription->setMessage('Mensaje registro');

        $subscription->save();
        $this->getResponse()->setBody('Success');
    }
}