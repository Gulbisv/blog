### Gala darbs - Bloga izveidoša ar Laravel

1)Izmantojot laravel tika izveidots blogs, kurā var pievienot, editot un dzēst postus.
2)Footerī ir 3 pogas divas ar iepriekšējiem uzdevumiem - alarm un cv, un viena jauna posta pievienošanai.
3)Katrai lapai ir back poga, kura atved atpakaļ uz sākumlapu.
4)Piespiežot "Read more" pogu postam, aizvedīs individuāli uz post, kur arī ir trīs opcijas - go back, edit or delete post.
5)Postus var arī editot pēc /blog/edit/id/{{id}} - aizvedīs uz edit lapu. {{id}} paņem no datubāzes
6)Postus var dzēst arī pēc /blog/delete/id/{{id}} -posta {{id}} no datubāzes.
7)Datubāze tika izveidota ar migrāciju. Visi izveidotie posti parādās datubāzē, kā arī editi un delete atjauno datubāzi.
8)Postu veido no 4 laukiem - title, title description, content un image - visi lauki ir nepieciešami.
