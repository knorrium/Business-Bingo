Software Testing Business Bingo
===============================

History
-------

A really long time ago, [I](http://twitter.com/knorrium) got an e-mail with some bingo cards that had buzzwords instead of numbers and were intended to be used during meetings. This e-mail appeared on my inbox every now and then, but no software testing buzzwords were ever used.

During a conversation on Twitter with [Elias Nogueira](http://twitter.com/eliasnogueira), [Camilo Ribeiro](http://twitter.com/camiloribeiro) and [Fabricio Ferrari de Campos](http://twitter.com/fabricioffc), I started using the #BusinessBingo hashtag to collect some buzzwords and Camilo decided to implement a simple bingo card generator. From the initial code I made it i18n ready and added an English translation.

Notes
-----

The version I'm hosting on my [website[(http://knorrium.info/bingo) is set to fallback to the en_US locale. If you want to host it somewhere else, you'll have to change it on the index.php file and the card.php file.


How to contribute
-----------------

If you would like to contribute to the project, feel free to fork it and send pull requests. We would love to see more words or even more languages!

Here are some more ideas to play with:

+ The code is not great because we are testers who code, not coders who test, afterall. Any refactor is welcome :)
+ Would it be overkill to have an automation suite? :)
+ The layout is pretty simple and is missing the "B I N G O" header, people might miss the language selector on the top left
+ There could be an extra step (or just a dropdown) to switch between different knowledge domains. We only have software testing buzzwords for now, mixing with other developer/management specific words could make it very hard to ever win the game, so that's a nice feature
+ Implementing a better locale handler

Credits
-------

+ Shouts go out to Camilo for the initial code
+ Thanks again to Camilo, Elias and Fabricio for helping with the initial "database"
+ Flag icons were taken from [here](http://www.famfamfam.com/lab/icons)
