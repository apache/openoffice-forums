# Apache OpenOffice Forums

This repository will contain all the information needed to maintain and sysadmin the OpenOffice.org user forums.

https://forum.openoffice.org

## var_www

We start with the base configuration of `var_www` which supports separate phpBB forums for 9 languages:

1. English - https://forum.openoffice.org/en/forum
2. Spanish - https://forum.openoffice.org/es/forum
3. French - https://forum.openoffice.org/fr/forum
4. Hungarian - https://forum.openoffice.org/hu/forum
5. Italian - https://forum.openoffice.org/it/forum
6. Japanese - https://forum.openoffice.org/ja/forum
7. Dutch - https://forum.openoffice.org/nl/forum
8. Polish - https://forum.openoffice.org/pl/forum
9. Vietnamese - https://forum.openoffice.org/vi/forum (read-only)

## phpBB

Here we have our patched version of phpBB. This is GPL v2. See https://www.phpbb.com/downloads/license

A full release package is included downloaded from https://www.phpbb.com/downloads/

Language packs are downloaded from https://www.phpbb.com/languages/ and expanded.

We have scripts to assemble our altered version of a phpBB release and install it.

## Please standby

I see how to make an update be triggered by a merged PR in this repository.
