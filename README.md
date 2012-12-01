github-activity
===============

Get your account's GitHub public activity.

As viewed in:
http://www.pedrofelipe.com.br/github.php or http://www.pedrofelipe.com.br

gettin' data
===============

Activity id
`$xml->entry[$i]->id;`

Activity title
`$xml->entry[$i]->title;`

Activity URL (account, repo, etc.)
`$xml->entry[$i]->link["href"];`

Activity date
`$xml->entry[$i]->updated;`
`$xml->entry[$i]->published;`

Activity author name
`$xml->entry[$i]->author->name;`

Activity author e-mail
`$xml->entry[$i]->author->email;`

Activity author profile (url)
`$xml->entry[$i]->author->uri;`

Last account activity date
`$xml->updated;`