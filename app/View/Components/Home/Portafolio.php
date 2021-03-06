<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;
use Illuminate\Support\Arr;
use function url;
use function view;

class Portafolio extends Component
{
    /**
     * Projects.
     *
     * @var array
     */
    public array $items = [];

    /**
     * Projects categories.
     *
     * @var array
     */
    public array $tabs = [];

    /**
     * Create a new component instance.
     * @param array  $items
     * @param array  $tabs
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['PHP'],
                'title' => 'PHP MVC Micro-Framework',
                'image' => secure_url('/img/php-mvc-framework.png'),
                'description' => 'Micro-Framework que desarrolle para entender mejor el concepto de MVC (Modelo-Vista-Controlador)',
                'github' => 'https://github.com/JuanXB/microFrameworkPHP'
            ],
            [
                'category' => ['PHP', 'CSS', 'MySql'],
                'title' => 'Registro de gastos',
                'image' => secure_url('/img/registroGastos.png'),
                'description' => 'App web para el registro de gastos personales usando el micro-frawork que desarrolle',
                'github' => 'https://github.com/JuanXB/ProyectoGastos'
            ],

            [
                'category' => ['PHP', 'MySql', 'CSS'],
                'title' => 'Sistema de inicio de sesión',
                'image' => secure_url('/img/LoginPage.png'),
                'description' => 'Sistema de inicio de sesión con validacion y registro de usuarios con PHP',
                'github' => 'https://github.com/JuanXB/ProyectoPhpMySql'
            ],

            [
                'category' => ['PHP', 'Laravel', 'Vue', 'Boostrap 5'],
                'title' => 'Clone de Instagram',
                'image' => secure_url('/img/instagramClone.png'),
                'description' => 'Clone de Instagram usando Laravel',
                'github' => 'https://github.com/JuanXB/freeCodeGram'
            ],

        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portafolio');
    }
}
