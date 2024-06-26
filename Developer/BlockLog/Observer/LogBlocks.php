<?php
namespace Developer\BlockLog\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\View\LayoutInterface;
use Psr\Log\LoggerInterface;

class LogBlocks implements ObserverInterface
{
    protected $logger;
    protected $layout;

    public function __construct(LoggerInterface $logger, LayoutInterface $layout)
    {
        $this->logger = $logger;
        $this->layout = $layout;
    }

    public function execute(Observer $observer)
    {
        $allBlocks = $this->layout->getAllBlocks();
        foreach ($allBlocks as $block) {
            $this->logger->info('Block Class: ' . get_class($block));
        }
    }
}
