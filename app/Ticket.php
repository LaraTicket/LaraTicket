<?php namespace LaraTicket;

use Illuminate\Database\Eloquent\Model;
use Venturecraft\Revisionable\RevisionableTrait;

class Ticket extends Model {

    use RevisionableTrait;


    /**
     * Status of this ticket
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function status()
    {
        return $this->hasOne(TicketStatus::class);
    }
}
