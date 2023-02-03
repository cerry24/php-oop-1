<?php

    class Movie {
        public $title;
        public $genre;
        public $rating;
        public $cast;

        public function __construct($_title, $_genre, $_rating, $_cast) {
            $this->title = $_title;
            $this->genre = $_genre;
            $this->rating = $_rating;
            $this->cast = $_cast;
        }

        public function getCastMembers() {
            return $this->cast;
        }
    }