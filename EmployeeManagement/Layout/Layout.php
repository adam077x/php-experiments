<?php
    class Layout {
        public $layoutPath;

        public function __construct($layoutPath) {
            $this->layoutPath = $layoutPath;
        }

        public function renderLayout($params) {
            $content = "<?php echo 'hello' ?>";
            require_once("Layout/Layouts/".$this->layoutPath);
        }
    }
?>