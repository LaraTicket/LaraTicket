<?php namespace LaraTicket\Commands;

use LaraTicket\Commands\Command;

use Illuminate\Contracts\Bus\SelfHandling;

class CreateTicketCommand extends Command implements SelfHandling {

  /**
   * Create a new command instance.
   *
   */
    public function __construct()
    {
        //
    }

    /**
     * Execute the command.
     *
     * @return void
     */
    public function handle()
    {
        //
    }

}
