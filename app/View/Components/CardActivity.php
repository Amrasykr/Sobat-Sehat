<?php

// CardActivity.php

namespace App\View\Components;

use Illuminate\View\Component;

class CardActivity extends Component
{
    public $day;
    public $photoUrl;
    public $url;

    /**
     * Create a new component instance.
     *
     * @param string $day
     * @param string $photoUrl
     * @param string $url
     */
    public function __construct($day, $photoUrl, $url)
    {
        $this->day = $day;
        $this->photoUrl = $photoUrl;
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('components.card-activity');
    }
}
