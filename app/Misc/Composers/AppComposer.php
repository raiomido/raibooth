<?php


namespace App\Misc\Composers;


use Illuminate\View\View;

class AppComposer
{
    public function compose(View $view) {
        $view->with([
            'naturalPageTitle' => 'Rai Booth',
            'naturalPageDescription' => 'Your home of eBooks',
            'naturalPageKeywords' => 'ebooks, online books, online book store',
            'naturalOgImage' => url('images/default.jpg'),
            'naturalOgImageAlt' => 'Rai Booth',
        ]);
    }

}
