<?php

namespace Alura\Calisthenics\Domain\Video;

class Videocollection
{
        private array $videos = [];

        public function add(Video $video): void
        {
            $this->videos[] = $video;
        }

        public function filterByStudentAge(int $age): array
        {
            return array_filter($this->videos, fn(Video $video) => $video->getAgeLimit() <= $age);
        }
}
