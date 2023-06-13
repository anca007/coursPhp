<?php

class Form
{
    private string $content;

    public function __construct(string $action = '#', string $method = 'GET')
    {
        $this->content = "<form action='$action' method='$method'>";
    }

    public function addInput(string $name, string $label, string $type){
        $this->content .= "<label for='$name'>$label</label>";
        $this->content .= "<input name='$name' id='$name' type='$type'/>";
        $this->content .= '<br>';
    }

    public function addSubmit(string $name,){
        $this->content .= "<input name='$name' id='$name' type='submit' value='$name'/>";
    }

    public function getForm() : string{
        $this->content .= '</form>';
        return $this->content;
    }

}