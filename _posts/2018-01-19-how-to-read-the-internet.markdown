---
title: How to Read the Internet
date: 2018-01-19 23:14:00 -08:00
categories:
- personal
tags:
- css
- web design
- rss
---

Before newsletters and social networks there was RSS, a tool that helped us keep up to date with our favorite websites. And it was relatively simple, too: through a web app such as [Google Reader](https://en.wikipedia.org/wiki/Google_Reader/), you could effectively subscribe to another website’s content feed and get an alert whenever something new had been posted. On the developer side, a web designer would write a little bit of code to post all of their website’s content in a format that Google Reader could then scrape and serve to you.

Why did RSS (or Really Simple Syndication) exist in the first place though? Well, strangely enough, way back in 1999 you’d have to visit a website multiple times a day just to see if anything new had been posted. There was no Twitter or Facebook Feed, and so thankfully RSS solved that problem; whenever a website updated their feed we’d be notified immediately. 

But it was through this data format and feed reader web app that something magical began to take place over time, on a much smaller scale, for me: in the mid-naughts I started following people on the other side of the world through the ups and downs of their careers, through to the final days of their lives even. Some people wrote about the painful moments of their relationships and recorded their day-to-day struggles, treating their websites like an open diary. Others honed in on a specific topic such as programming or poetry and were clearly brilliant but mysterious in ways I found alluring. 

Scanning these feeds over breakfast or lunch and on the train 
to work, I would likely stumble on [a fantastic blog post](http://www.kungfugrippe.com/post/169873399/clackity-noise) or a long and [rambling thing about fonts](https://ilovetypography.com/2007/10/22/so-you-want-to-create-a-font-part-1/). I would subscribe to tumblr feeds, or the work of professional journalists, or the work of [fellow](http://www.zeldman.com/) [web](http://aworkinglibrary.com/) [designers](https://adactio.com) and [indie novelists](http://www.hughhowey.com/blog/). At the time it seemed like all of this was a critical part of the web.
 
RSS was the feed before the Feed™️. You could see all of your subscriptions of every website at a quick glance — and yet we have Twitter and Facebook and newsletters today, so who cares? We don’t need RSS any more, right?

Well, I believe that RSS was much more than just a fad. It made blogging possible for the first time because you could follow dozens of writers at the same time and attract a considerably large audience if you were the writer. There were no ads (except for the high-quality [Daring Fireball](https://daringfireball.net/) kind), no one could slow down your feed with third party scripts, it had a good baseline of typographic standards and, most of all, it was _quiet_. There were no comments, no likes or retweets. Just the writer’s thoughts and you. 

So instead of being just another way to get posts from blogs that you were interested in, RSS fostered countless communities and friendships [across oceans, across networks](https://robinrendle.com/notes/chloe/). And because of that I now think of RSS as a window into a room with the smartest, kindest people — and sometimes, on the rarest of occasions, they would open up the window and wave back.

But then, rather suddenly, Google decided to kill Reader and it looked like RSS had been caught in the crossfire, too. In hindsight it’s clear that this was the greatest weakness and flaw of RSS: because Google Reader was a free service (and a decent one, too) developers wouldn’t build tools that would compete with it. Google had effectively hijacked the open technology, destroying the competition by making a free service, and then killed the tool that was so associated with it that RSS and Google Reader appeared to be the same thing. (Insert rant about the relationship between google dot com and the rest of the web today here).

The unhealthy bond between RSS and Google Reader is proof of how fragile the web truly is, and it reveals that those communities can disappear just as quickly as they bloom. However, with that being said, today RSS is alive and well. A vast number of websites still support the syndication formats that fall under the umbrella of what I consider RSS to be. And over the years since Google Reader disappeared there’s been a resurgence of competitive apps and services — some of these do the RSS feed scraping, others simply display the data, and some do both. 

But if you’ve never heard of RSS before, or if you fancy getting back into RSS because the Feeds of other social networks have been stressing you out, then here’s a rough guide of how to do that today. This is how I read the web in 2018.


## The Setup
There are two services that I’ve fallen in love with over the years: [Feedbin](https://feedbin.com/) (a service that saves all my subscriptions and keeps everything in sync) and Reeder ([a macOS](http://reederapp.com/mac/) and [iOS app](http://reederapp.com/ios/) that lets me read those subscriptions). These two are a match made in heaven and I haven’t changed anything about my setup in *years* because it’s precisely what I want, although I reckon it’s important to note that there are a number of alternatives out there and so this setup might not be precisely what you want and/or need. 

Also I guess it’s quickly worth mentioning that a feed is typically in a format such as [Atom](https://en.wikipedia.org/wiki/Atom_(Web_standard)), [RSS](https://en.wikipedia.org/wiki/RSS), [json](https://jsonfeed.org/) or XML — but you don’t really need to care which format a website supports because most of these feed-reading services will accept them all. We just need to care about the URL of the website we want to subscribe to, such as robinrendle.com, which we would just copy and paste to the RSS feed reader of our choice. What the app will then do is search for a link in the `head` of the website that [looks like this](https://robinrendle.com/feed.xml):

```
<html>
  <! -- other stuff -->
  <link href="https://robinrendle.com/feed.xml" rel="alternate" type="application/atom+xml">
```

But do you need to know that to use RSS? Absolutely not. 

Anyway, Feedbin is one of those services that’ll take a format like that, check to see if the feed has been updated, and then return the results. Effectively it’s the service that stores all of my RSS subscriptions and makes sure that they’re synced across devices. 

I pay $5 a month for Feedbin but I feel like I get way more than my money’s worth. In fact, Feedbin is sort of like the plumbing of RSS for me — I don’t interact with the site at all and I think perhaps I’ve logged in only a couple of times over the years but I’m still a huge fan. And knowing that I’m a paying customer makes me hopeful that a sustainable business can be built out of it.

But if you just want to give RSS a try then Feedbin has a reader built into the web app itself. You can login, add some subscriptions (by copying and pasting the URLs) and there you have it! You can read anything you’d like. Here’s what that UI looks like:

![Screenshot 2018-01-19 23.01.png](/uploads/Screenshot%202018-01-19%2023.01.png)

However, as I mentioned earlier I happen to use the Reeder apps for their customization options and offline-storage features for actually reading the feeds that Feedbin manages. So what I did for my setup was snag the login details from my account and added them to the Reeder apps.

So, on to Reeder: it’s a suite of apps that will take login details from a feed reading service (like Feedbin) and then display that information. The Reeder apps (not to be confused with Google _Reader_) are where I spend most of my time instead of hitting up a website to see if it’s been updated — I adore this suite of apps more than words can say and if I had to choose my Twitter account over my RSS setup I wouldn’t hesitate for a second — I’d throw Twitter right into the ocean.

In order to read anything from a website with RSS though you’ll need to add a feed. Once you’ve bought and installed the Reeder app, and then synced it with your Feedbin account (or with something similar), you can head over to a website and copy its URL. In this instance let’s say we want to subscribe to all stories from [nyt.com](http://nyt.com):

<video autoplay="autoplay" loop="loop" class='m-wrapper cell-b20'>
<source src="/uploads/1.mp4" type="video/mp4" /></video>

And once you’ve added it there it’ll appear with a collection of the most recent posts in the sidebar. In the NYT’s case they only give you little snippets of the articles but in many cases a website will make the entire contents of an article available:

<video autoplay="autoplay" loop="loop" class='m-wrapper cell-b20'>
<source src="/uploads/2.mp4" type="video/mp4" /></video>

Of course, over the years I’ve customized Reeder (because I’m a picky type nerd) and so I‘ve set wider text columns and used [Output](https://djr.com/output/) by David Jonathan Ross, for legibility’s sake. I reckon this really is the perfect way for me to read the web and I can only imagine the number of hours I’ve spent staring at this app.  


## 2018: the blogs are back

A friend of mine the other day said that “maybe [Medium](https://medium.com/) only exists because Google Reader died — Reader left a vacuum, and the social network filled it.” I’m not entirely sure I agree with that, but it sure seems likely. And if that’s the case then the death of Google Reader probably led to the emergence of email newsletters, too. And yet, however great those little email updates are, they’re mostly unarchived and floating around in people’s inboxes. A lot of them aren’t accessible via a URL and so in time they’ll be forgotten and washed away — some of them might be accessible via the [Internet Archive](https://archive.org/) at one point or another, but most of them won’t be.

On a similar note, many believe that [blogging is making a return](https://ia.net/topics/web-trend-map-2018/). Folks now seem to recognize the value of having your own little plot of land on the web and, although it’s still pretty complex to make your own website and control all that content, it’s worth it in the long run. No one can run ads against your thing. No one can mess with the styles. No one can censor or sunset your writing. 

Not only that but when you finish making your website you will have gained superpowers: you now have an independent voice, a URL, and a home on the open web. 

I think that’s why my feelings about RSS are so strong. And I know this might sound peculiar and perhaps even silly, but I have an emotional attachment to RSS the technology and RSS the community that sort of defies explanation. I suppose it’s the same way I feel about my library: I’ve collected a little treasure trove of other people’s ideas, and I’m not entirely sure what my life would look like without them.





