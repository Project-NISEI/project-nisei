<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Faq;

class FAQComposer
{
    protected $faqs;

    /**
     * Create a new profile composer.
     *
     * @param  User  $faqs
     * @return void
     */
    public function __construct(Faq $faqs)
    {
        $this->faqs = $faqs;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->faqs = $this->faqs->orderBy('position', 'asc')->get();
    }
}
