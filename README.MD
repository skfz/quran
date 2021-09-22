# A simple Quran package for Laravel
Source of data https://www.kaggle.com/zusmani/the-holy-quran. The CSV has been converted to a SQL seeder file to be imported into the Laravel application.

## Dependencies
The package uses ReadOnlyTrait to prevent any changes
`composer require michaelachrisco/readonly`

## Steps to integrate the package
```
composer require skfz\quran
php artisan vendor:publish --tag=quran-seeder
php artisan migrate
php artisan db:seed QuranSeeder
```
## How to use
The data is available using the Skfz\Quran\Reader facade. Its formatted as an associative array
```
// Get list of Juz(Groups)
Reader::getGroups()

// Get list of Surahs(Chapeters)
Reader::getChapters()

// Get list of Surahs in Juz
Reader::getChaptersInGroup()

// Get verses of a Surah (default number of verses returned 40)
Reader::getVersesByChapter($chapterId, $numberOfverses);

// Get verses of in a Juz (default number of verses returned 40)
Reader::getVersesByGroup($groupId, $numberOfVerses);
```

