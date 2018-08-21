# payday2.pw

A small website I made for a friend so he can show off some of his work.

## What is this?

This is the repository for the Website https://payday2.pw. The website was made for a nice guy that offered me his self made Payday2 mods. He gave me a link to an open dropbox, and as I wanted to do an CSS-only project at the time, I asked him If he wants a website.

There is a little PHP script that loops through given folders and prints HTML including a download link, so GAB (my friend) can move create and delete downloads without touching code at all.

The mods folder is empty, because it is not my code!

## Where is the JavaScript?

So this website was made *without any JavaScript*. I have done that to further improve my knowledge of CSS and to experiment with things like CSS only navbars, accordions and playing around with pseudo elements.

I also used the [OOCSS](https://github.com/stubbornella/oocss/wiki) methodology, to make the CSS scalable and develop in vanilla CSS without having dirty *append only* type code. I will probably write an article about OOCSS in my blog sooner or later.

I have learned a couple things doing that: 

- OOCSS is cool, but a hassle to get started with. Still worth it
- Using JS for things like the navbar is the cleaner and faster approach. CSS only solutions are fine and all, but the markup gets messy and you fiddle a lot with positionings and pseudo elements. Using  ` element.innerHTML = "+"; ` is way more straightforward then modyfing the  ` content: "+"; ` of various pseudo elements with 3 line long selectors. By splitting that more the markup comes out cleaner and positioning is way easier, as the CSS solutions include absolute positioned and invisible input elements. Was still fun to do that in CSS though. 

## Anything else?

Yes! I have made sure to optimize the website as much as I can.

- [Google PSI](https://developers.google.com/speed/pagespeed/insights/?url=https%3A%2F%2Fpayday2.pw)
- [Seobility]()
