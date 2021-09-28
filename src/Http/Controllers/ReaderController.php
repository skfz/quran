<?php

namespace Skfz\Quran\Http\Controllers;

use Skfz\Quran\Models\Group;
use Skfz\Quran\Models\Chapter;
use Skfz\Quran\Models\Verse;
use Illuminate\Support\Facades\DB;

class ReaderController extends Controller {
    
    public function getGroups() {
        
        return Group::get()->toArray();
    }

    public function getGroupById($groupId) {
        
        return Group::find($groupId)->toArray();
    }

    public function getChapters() {
        
        return Chapter::get()->toArray();
    }

    public function getChapterById($chapterId) {

        return Chapter::find($chapterId)->toArray();
    }

    public function getChaptersInGroup($groupId) {

        return Group::find($groupId)->chapters->toArray();
    }

    public function getVersesByChapter($chapterId, $paginate=40) {

        return Verse::where('chapter_id', $chapterId)->paginate($paginate)->toArray();
    }

    public function getVersesByGroup($groupId, $paginate=40) {

        return Verse::where('group_id', $groupId)->paginate($paginate)->toArray();
    }
}