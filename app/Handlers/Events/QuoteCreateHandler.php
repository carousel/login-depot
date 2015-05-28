<?php namespace App\Handlers\Events;

use App\Events\QuoteCreate;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;

class QuoteCreateHandler {

	/**
	 * Create the event handler.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

	/**
	 * Handle the event.
	 *
	 * @param  CompanyWasRegistered  $event
	 * @return void
	 */
	public function handle(QuoteCreate $event)
	{
	}
    /**
    * 
    */
    public function onQuoteCreate($data)
    {
        \Mail::send("emails.quote",["data" => $data],function($message) use ($data){
            $message->to($data["email"])
                ->subject("new quotes sent");
        });
        return true;
    }
    /**
    * 
    */
    public function subscribe($events)
    {
        $events->listen("App\Events\QuoteCreate"
            ,"App\Handlers\Events\QuoteCreateHandlerHandler@onQuoteCreate");
        
    }

}
