<?php

namespace Alura\Calisthenics\Domain\Video;

use Alura\Calisthenics\Domain\Student\Student;

class InMemoryVideoRepository implements VideoRepository
{
    private VideoCollection $videos;

    public function __construct()
    {
        $this->videos = new Videocollection;
    }

    public function add(Video $video): void
    {
        $this->videos->add($video);
    }

    public function videosFor(Student $student): array
    {
        $age = $student->age();
        
        return $this->videos->filterByStudentAge($age);
    }
}
