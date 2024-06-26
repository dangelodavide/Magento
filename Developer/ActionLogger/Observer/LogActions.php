<?php
namespace Developer\ActionLogger\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;
use Psr\Log\LoggerInterface;

class LogActions implements ObserverInterface
{
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function execute(Observer $observer)
    {
        $eventName = $observer->getEvent()->getName();
        $controller = $observer->getEvent()->getControllerAction();
        $request = $controller->getRequest();

        $actionName = $request->getFullActionName();
        $params = json_encode($request->getParams());

        $this->logger->info("Event: $eventName, Admin action: $actionName, Params: $params");
    }
}
