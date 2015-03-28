<?php

namespace spec\LaraTicket\Commands;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CreateTicketCommandSpec extends ObjectBehavior {

  function it_is_initializable()
  {
    $this->shouldHaveType('LaraTicket\Commands\CreateTicketCommand');
  }

  function it_handles_the_command()
  {
    
  }
}
