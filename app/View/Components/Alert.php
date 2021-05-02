<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     //public $message;
     public $type;

    public function __construct( $type =null )
    {
        //$this->message = $message;
        $this->type = $type;
    }

    public function errorType(){

        if($this->type == 'error' ){
            return ' bg-red-600 text-white';
        }else{
            return ' bg-green-600 text-white';
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
