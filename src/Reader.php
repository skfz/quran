<?php

namespace Skfz\Quran;

use Skfz\Quran\Http\Controllers\ReaderController;

class Reader {

    private $reader;

    CONST GROUP_MAX = 30;

    CONST CHAPTER_MAX = 114;

    public function __construct() {
        if (!($this->reader instanceof ReaderController)) {
            $this->reader = new ReaderController;
        }
    }

    public function getGroups() {
        return $this->reader->getGroups();
    }

    public function getGroupById($groupId) {

        $this->_validateId($groupId, self::GROUP_MAX);

        return $this->reader->getGroupById($groupId);
    }

    public function getChaptersInGroup($groupId) {
        
        $this->_validateId($groupId, self::GROUP_MAX);

        return $this->reader->getChaptersInGroup($groupId);
    }

    public function getChapters() {
        return $this->reader->getChapters();
    }

    public function getChapterById($chapterId) {
        
        $this->_validateId($chapterId, self::CHAPTER_MAX);

        return $this->reader->getChapterById($chapterId);
    }

    public function getVersesByChapter($chapterId, $paginate=40) {

        $this->_validateId($chapterId, self::CHAPTER_MAX);

        return $this->reader->getVersesByChapter($chapterId, $paginate);
    }

    public function getVersesByGroup($groupId, $paginate=40) {

        if (!intval($groupId) || $groupId < 0 || $groupId > self::GROUP_MAX) {
            $groupId = 1;
        }

        return $this->reader->getVersesByGroup($groupId, $paginate);
    }

    private function _validateId(&$id, $max) {
        
        if (!intval($id) || $id < 0 || $id > $max) {
            $id = 1;
        }
    }
}
