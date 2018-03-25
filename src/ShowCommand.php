<?php

namespace Tasks;


use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\Table;


class ShowCommand  extends Command
{

    public function configure()
    {
        $this->setName('show')
            ->setDescription('Show All tasks');
    }

    public function execute(InputInterface $interface,OutputInterface $output)
    {
        $this->showTasks($output);
    }

}