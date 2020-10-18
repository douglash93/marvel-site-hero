<?php 
namespace Marvel\Services\View;

interface IView {
    function render(string $pathView, Array $variables);
}