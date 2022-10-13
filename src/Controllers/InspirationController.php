<?php

namespace Itsmurumba\Inspire\Controllers;

use Itsmurumba\Inspire\Inspire;

class InspirationController{

    public function __invoke(Inspire $inspire)
    {
        $quote = $inspire->justDoIt();

        return view('inspire::index', compact('quote'));
    }
}





