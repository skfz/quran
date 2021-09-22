<?php

namespace Skfz\Quran;

use Skfz\Quran\Http\Controllers\ReaderController;

class Reader {

    private $reader;

    CONST GROUP_MAX = 30;

    CONST CHAPTER_MAX = 114;

    public function __construct() {
        $this->reader = new ReaderController;
    }

    public function getGroups() {
        return $this->reader->getGroups();
    }

    public function getChaptersInGroup($groupId) {
        
        if (!intval($groupId) || $groupId < 0 || $groupId > self::GROUP_MAX) {
            $groupId = 1;
        }

        return $this->reader->getChaptersInGroup($groupId);
    }

    public function getChapters() {
        return $this->reader->getChapters();
    }

    public function getVersesByChapter($chapterId, $paginate=40) {

        if (!intval($chapterId) || $chapterId < 0 || $chapterId > self::CHAPTER_MAX) {
            $chapterId = 1;
        }

        return $this->reader->getVersesByChapter($chapterId, $paginate);
    }

    public function getVersesByGroup($groupId, $paginate=40) {

        if (!intval($groupId) || $groupId < 0 || $groupId > self::GROUP_MAX) {
            $groupId = 1;
        }

        return $this->reader->getVersesByGroup($groupId, $paginate);
    }
}
