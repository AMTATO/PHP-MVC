<?php  
    class About{
        public function index($nama, $pekerjaan){
            echo "Halo, saya $nama, saya seorang $pekerjaan";
        }

        public function page(){
            echo 'about/page';
        }
    }
?>