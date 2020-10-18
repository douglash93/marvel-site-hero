<?php 

namespace Marvel\Services\View;

class View implements IView
{
	private $loader;
	private $twig;
	
	function __construct() {
        
		$this->loader = new \Twig\Loader\FilesystemLoader(VIEW_PATH);
        $this->twig = new \Twig\Environment($this->loader, [
			'cache' => BASE_PATH .'Cache',
			'debug'	=>	true,
			'auto_reload' => true,
			'strict_variables' => false,
			'autoescape' => false
        ]);
    }
    
    public function render(string $pathView, Array $variables) {
        return $this->twig->render($pathView, $variables);
    }
}