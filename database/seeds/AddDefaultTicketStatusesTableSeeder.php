<?php

use Illuminate\Database\Seeder;
use \LaraTicket\TicketStatus;

class AddDefaultTicketStatusesTableSeeder extends Seeder {

    /**
     * TicketStatus for internal use
     *
     * @var \LaraTicket\TicketStatus
     */
    private $status;


    /**
     * Construct the seeder
     *
     * @param \LaraTicket\TicketStatus $status
     */
    public function __construct(TicketStatus $status)
    {

        $this->status = $status;
    }


    /**
     * Run the seeder
     */
    public function run()
    {
        $statuses = [
            'Open',
            'Waiting Response',
            'Closed'
        ];
        foreach ($statuses as $status)
        {
            $this->status->create([ 'name' => $status ]);
        }
    }

}
