<?php
    class View{
        protected $body;
        protected $head;
        protected $footer;
        
        function __construct()
        {
            $this->body = file_get_contents(__DIR__ .'/../View/body.html');
            $this->head = file_get_contents(__DIR__ .'/../View/head.html');
            $this->footer = file_get_contents(__DIR__ .'/../View/footer.html');
        }

        function body(){
            return $this->body;
        }
        function footer(){
            return $this->footer;
        }
        function head(){
            return $this->head;
        }
        public function run(){
            $body = $this->body($this->body);
            $head= $this->head($this->head);
            $footer = $this->footer($this->footer);
            return $body.''.$footer.''.$head;
    }

}
