## Marvel API Consumer App
### Marvel Characters

This app fetches a list of all marvel characters and their info.

### Installation
Clone or download the repository

```
git clone https://github.com/somuoki/marvel-characters.git
cd marvel-characters
php artisan serve
```
on .env store your api keys as
```
MARVEL_PUB_KEY=1234
MARVEL_PRIVATE_KEY=abcd
```

### Routes
#### home (/)
Shows a list of all marvel characters in groups of 20 per page

- Character name
- Number of comics the character has appeared in
- number of events
- number of series
- number of stories
- picture of character

#### character (character/{id})
Shows information about specific character including comics, events,
series, and stories they have appeared in

#### comic (comic/{id})
Shows all the characters in a certain comic

#### event (event/{id})
Shows all the characters in a certain event

#### series (series/{id})
Shows all the characters in a certain series

#### story (stories/{id})
Shows all the characters in a certain story


