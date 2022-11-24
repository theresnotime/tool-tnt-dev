---
title: Hello World
description: It's a start — I'm going to try to write a blog post every week, wish me luck..
date: 2022-11-23
layout: layouts/post.njk
tags:
  - Meta
  - Phonos
---
In the spirit of trying to increase transparency into what Wikimedia Foundation software engineers get up to on a daily basis (or at least, what [a single member](https://meta.wikimedia.org/wiki/User:TheresNoTime-WMF) of the [Community Tech team](https://meta.wikimedia.org/wiki/Community_Tech) gets up to!), I'm going to try to write a blog post every week.

I'm not sure how long I'll be able to keep this up, as normally any sort of blog project I try to start falls flat on its face after about a month, but I suppose we'll see!
I'm going to let my team know as a bit of accountability.

## Eleventy—*what?*

A nice interesting (side)topic for this blog is going to be the fact that it's built using [Eleventy](https://www.11ty.dev/), a static site generator I've not used before. Normally I'd use something like [Hugo](https://gohugo.io/) or [Jekyll](https://jekyllrb.com/) for this sort of thing, but this seems like a good opportunity to learn something new.

## ~~What have I been working on today?~~
I was going to frame these posts as "*What have I been working on today?*", but as a [night owl](https://en.wiktionary.org/wiki/night_owl#Noun) "today"  often means "*some of yesterday, and a bit of today*" — I think it'll be easier to frame it as "*What have I been working on recently?*" (if only because *then* I don't need to figure out what day it is).

## What have I been working on recently?
### IPAValidator
As part of an [accepted Community Wishlist item](https://meta.wikimedia.org/wiki/Community_Wishlist_Survey_2022/Generate_Audio_for_IPA), I built a PHP composer library to validate and normalise [IPA](https://en.wikipedia.org/wiki/International_Phonetic_Alphabet) — initially this repo was on my personal GitHub account, but it was suggested during security review that it would be better to move it to `mediawiki/libs` on Gerrit.

This move left some tidying up to do, which would contribute towards stalling further development, so my attention has primarily been on that — pretty cool that I wrote a library that's now being used by the MediaWiki proper!

Go check out https://gerrit.wikimedia.org/g/mediawiki/libs/IPAValidator (and please *please* improve [the regex](https://regex101.com/r/f2Qhuk)...)

```regex
^[().a-z|æçðøħŋœǀ-ǃɐ-ɻɽɾʀ-ʄʈ-ʒʔʕʘʙʛ-ʝʟʡʢʰʲʷʼˀˈˌːˑ˞ˠˡˤ-˩̴̘̙̜̝̞̟̠̤̥̩̪̬̯̰̹̺̻̼̀́̂̃̄̆̈̊̋̌̏̽̚͜͡βθχ᷄᷅᷈‖‿ⁿⱱ]+$
```
