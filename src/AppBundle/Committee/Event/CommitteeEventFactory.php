<?php

namespace AppBundle\Committee\Event;

use AppBundle\Address\PostAddressFactory;
use AppBundle\Entity\CommitteeEvent;

class CommitteeEventFactory
{
    private $addressFactory;

    public function __construct(PostAddressFactory $addressFactory = null)
    {
        $this->addressFactory = $addressFactory ?: new PostAddressFactory();
    }

    public function createFromCommitteeEventCommand(CommitteeEventCommand $command): CommitteeEvent
    {
        return new CommitteeEvent(
            $command->getUuid(),
            $command->getAuthor()->getUuid(),
            $command->getCommittee(),
            $command->getName(),
            $command->getCategory(),
            $command->getDescription(),
            $this->addressFactory->createFromAddress($command->getAddress()),
            $command->getBeginAt()->format(DATE_ATOM),
            $command->getFinishAt()->format(DATE_ATOM),
            $command->getCapacity()
        );
    }
}
