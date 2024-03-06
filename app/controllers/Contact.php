<?php
    class Contact extends Controller {
        public function index($firstParamenrt = '', $number = '') {
            echo 'contact index - ' . $firstParamenrt . ' - ' . $number;
        }

        public function about() {
            echo 'contact about';
        }
    }