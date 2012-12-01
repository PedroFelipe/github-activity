github-activity
===============
* * *

Get your account's GitHub public activity.

As seen on:  
http://www.pedrofelipe.com.br/github.php or http://www.pedrofelipe.com.br

gettin' data
===============
* * *

__Activity id__  
`$xml->entry[$i]->id;`
  
__Activity title__  
`$xml->entry[$i]->title;`
  
__Activity URL (account, repo etc.)__  
`$xml->entry[$i]->link["href"];`
  
__Activity date__  
`$xml->entry[$i]->updated;`  
`$xml->entry[$i]->published;`
  
__Activity author name__  
`$xml->entry[$i]->author->name;`
  
__Activity author e-mail__  
`$xml->entry[$i]->author->email;`
  
__Activity author profile (url)__  
`$xml->entry[$i]->author->uri;`
  
__Last account activity date__  
`$xml->updated;`