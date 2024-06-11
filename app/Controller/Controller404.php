<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class Controller404 extends ClassRender implements InterfaceView{
    public function __construct(){
        $this->setTitle("Portfolio Beatriz Nogueira - Página Não Encontrada");
        $this->setDescription("Descubra o portfólio de Beatriz Nogueira: designer criativa e talentosa. Explore projetos inovadores, do design gráfico à identidade visual, e veja como transformo ideias em realidade visual.");
        $this->setKeywords("Beatriz Nogueira, portfólio, design gráfico, identidade visual, projetos inovadores, criatividade, designer, arte visual, projetos criativos, design, branding, 404");
        $this->setDir("404");
        $this->renderLayout();
    }
}