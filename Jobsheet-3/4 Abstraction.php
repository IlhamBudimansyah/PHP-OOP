<?php

abstract class Course
{
    abstract public function getCourseDetails();
}

class OnlineCourse extends Course
{
    private $courseName;
    private $platform;

    public function __construct($courseName, $platform)
    {
        $this->courseName = $courseName;
        $this->platform = $platform;
    }

    public function getCourseDetails()
    {
        return "Online Course : " . $this->courseName . ", Platform : " . $this->platform;
    }
}

class OfflineCourse extends Course
{
    private $courseName;
    private $location;

    public function __construct($courseName, $location)
    {
        $this->courseName = $courseName;
        $this->location = $location;
    }

    public function getCourseDetails()
    {
        return "Offline Course : " . $this->courseName . ", Location : " . $this->location;
    }
}

$online = new OnlineCourse("Bahasa Inggris", "Zoom");
$data_online = $online->getCourseDetails();
echo $data_online;

echo "<br>";

$offline = new OfflineCourse("Bahasa Inggris Grammar", "Cilacap");
echo $offline->getCourseDetails(); 