<?php
namespace FileManager;
	class FileManager
	{
		private $_listJsFile;
        private $_listCssFile;
		
		public function __construct()
		{
			$this->_listJsFile = array();
			$this->_listCssFile = array();
		}
		
		public function addJs($file)
        {
            $this->_listJsFile[] = $file; // tableau de fichiers javascript
        }

        public function addCss($file)
        {
            $this->_listCssFile[] = $file;
        }
		
		public function generateJs()
        {
            $jsContent = '';
            foreach($this->_listJsFile as $jsFile)
            {
                $jsContent .= '<script src="'. $jsFile . '" ></script>'; // lecture du tableau et affichage des balises javascript
            }
            return $jsContent;
        }

        public function generateCss()
        {
            $cssContent = '';
            foreach($this->_listCssFile as $cssFile)
            {
                $cssContent .= '<link rel="stylesheet" type="text/css" href="' . $cssFile . '" />';
            }
            return $cssContent;
        }

        public function generatePics()
        {
           
            return 0;
        }

	}