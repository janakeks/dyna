[![Dyna Logo](https://github.com/dyna-press/dyna-assets/raw/master/dyna-logo/dyna-logo-150.png "Dyna Logo")](https://dyna.press)

[![Dyna Teaser](https://github.com/dyna-press/dyna-assets/raw/master/dyna-image/dyna-teaser.jpg "Dyna Teaser")](https://dyna.press)

[![Travis Build Status](https://travis-ci.com/dyna-press/dyna.svg?branch=master)](https://travis-ci.com/dyna-press/dyna) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/dyna-press/dyna/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/dyna-press/dyna/?branch=master) [![Code Coverage](https://scrutinizer-ci.com/g/dyna-press/dyna/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/dyna-press/dyna/?branch=master) [![Code Intelligence Status](https://scrutinizer-ci.com/g/dyna-press/dyna/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence) [![License: GPL v2](https://img.shields.io/badge/License-GPL%20v2-blue.svg)](https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html) [![Gitter](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/dynapress/Dyna-Theme?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge)
[![Donate with Paypal](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=MQM7CMKXW94KQ)
[![Buy Me a Coffee at ko-fi.com](https://img.shields.io/badge/-Give%20a%20Tea-orange.svg?colorB=593C1F&colorA=4e798d&logo=data%3Aimage%2Fpng%3Bbase64%2CiVBORw0KGgoAAAANSUhEUgAAAA4AAAAOCAYAAAAfSC3RAAAAVUlEQVR4AWNQtnJTQcZ%2Blb2fsWF0dQzYNRHWzIBdE2EDGGCaSNYI47x69fY%2FMRimnmiNyGqwavyflo6MaawRTTP1%2FIiM4dFBQBPl8UggyRHWSHYiBwCwA90T1NTlAQAAAABJRU5ErkJggg%3D%3D%0D%0A&logoWidth=14)](https://ko-fi.com/dynapress)


# Dyna Starter Theme

The Dyna Starter-Theme is based on Underscores and the Gutenberg Starter Theme. It is currently under hard development and will soon add some interesting features. You may use it, fork it and do something cool with it.

## Features

This is the beginning. Many neat things will come. 

- Very stable Starter Theme
- Gutenberg-ready
- Responsive
- Quality assured
- Translation-ready
- WooCommerce-ready
- Accessible WCAG 2.1

## Demo Website

[![Dyna Demo](https://github.com/dyna-press/dyna-assets/blob/master/screenshots/dyna-starter-theme-current.jpg "Dyna Demo")](https://dyna.press)

There is no Demo set up for now. Visit our official Website on https://dyna.press to see how Dyna looks. Note that this is just a starter theme, stunning design things will be added soon.

## Installation

Installation is a bit tricky until we finish our first release. 

Of course you need a WordPress installation. Download the [latest stable release](https://github.com/dyna-press/dyna/releases), extract the files and rename the subfolder to from dyna-X.X.X to dyna. Upload this folder into the wp-content/themes folder on your webserver.

Of course you may also use the latest Master branch, but keep in mind that this ZIP-file includes unnecessary files like .git and test-configurations you do not need in your WordPress. They do not harm either.

The easier way than FTP is to upload a ZIP-file using the Upload Theme function in your WordPress Admin. But keep in mind than Github ZIP-files have a unnecesary nested folder. It is best practise to unzip and re-zip the theme so that dyna.zip contains the files, not another dyna-X.X.X folder. Installation works in either cases, but there may be crazy things going on, if you try to use our [Child Theme](https://github.com/dyna-press/dyna-child) or update the theme later.

There will be other ways for developer like Bower, NPM and Webpack coming soon, but for now this is the only way to use this theme and to start developing your own theme.

## Translation

[![Dyna Translation](https://github.com/dyna-press/dyna-assets/blob/master/poeditor/poeditor-current.jpg "Dyna Translation")](https://https://poeditor.com/join/project/t3gmD1eDOu)

Dyna is available in major languages and complete translation-ready. See the translation status and help translating Dyna on [Poeditor.com](https://poeditor.com/join/project/t3gmD1eDOu). Please help translating Dyna into your language. Create a Poeditor-Login and send me a request, it is so easy to donate. Read more about translation in the [translation issue](https://github.com/dyna-press/dyna/issues/25).

## Quality

Code quality is one of the least considered arguments when choosing a WordPress theme. The design weighs too heavily in the eye of the beholder. But for a theme framework or starter theme, quality is an enormously important argument. Therefore quality control is one of the most important components in the development of Dyna. We do a couple of mostly automated tests to assure quality. Read about the current status of testing in our [issue about quality assurance](https://github.com/dyna-press/dyna/issues/24). Our complete set of tests is:

### Sourcecode Quality / CI 

[![Dyna CI](https://github.com/dyna-press/dyna-assets/blob/master/scrutinizer/scrutinizer-current.jpg "Dyna CI")](https://scrutinizer-ci.com/g/dyna-press/dyna/)

We verify our theme code fully automatically with [Travis](https://travis-ci.com/dyna-press/dyna-starter-theme) and [Scrutinizer](https://scrutinizer-ci.com/g/dyna-press/dyna/).

PHP and Javascript are the two potential vulnerabilities that allow attackers to hack a WordPress page. Through continuous integration, we ensure that our code contains no vulnerabilities, is error-free and of high quality. In addition, Scrutinizier shows us our code quality, which educates us to code cleaner.

### Browser testing

We currently do manual browser checks and test with mobile devices and tablets using [Browserstack](https://www.browserstack.com/). We prepare Selenium-based automated tests. Read about the current status of browser testing in our [issue about quality assurance](https://github.com/dyna-press/dyna/issues/24).

### HTML5 Validity

We check the quality of our entire HTML5 source code as well as the CSS and Javascript with various tools, especially the  [HTML5-Validator](https://html5.validator.nu/) and of course the [W3 Validator](https://validator.w3.org/nu/). These tests are not currently automated, but are performed before each new release.

### Performance and server load

[![Dyna Performance](https://github.com/dyna-press/dyna-assets/blob/master/gtmetrix/gtmetrix-current.jpg "Dyna Performance")](https://gtmetrix.com/reports/dyna.press/HfwXCyXf)

The web should be fast. With mobile use at the latest, performance became a decisive value for websites. For search engine optimization SEO, speed has always been a key factor.

We test our performance regularly, at least before each new release. We use [GTMetrix](https://gtmetrix.com/), which includes Google Page Speed and Yahoo YLOW. As a guaranteed value we achieve an A-grade above 90%. Generally it should be possible to crack the 100% value with the optimization plugin Autoptimize and a caching plugin.

Second, we test the server load using our own server tools. This ensures that our themes can also run on low-cost shared hosts.

### Accessibility

We use semantic code and follow the [WCAG 2.1 accessibility guidelines](https://www.w3.org/TR/WCAG21/) of the [Web Accessibilty Initiative WAI](https://www.w3.org/WAI/). Conformity with the rules is tested with [several WAI recommended tools](https://www.w3.org/WAI/ER/tools/). These tests are not currently automated, but are performed before each new release.

### Theme Check

[![Dyna Performance](https://github.com/dyna-press/dyna-assets/blob/master/theme-check/theme-check-current.jpg "Dyna Performance")](http://themecheck.org)

The compliance to WordPress is a very important task. If you use a starter theme that is not compliant you may spend additional hours fixing these issues before you are able to upload it to the WordPress Theme Directory. We check the compliance with the [WordPress Theme Requirements](https://make.wordpress.org/themes/handbook/review/) using the [Theme Check Plugin](https://de.wordpress.org/plugins/theme-check/) and the [Theme Check Platform](http://themecheck.org).

### SEO and Semantics

Last but not least we do manual checks for Search Engine Optimization (SEO) and test semantic code features with a semantic checker, mostly using [Seorch](https://seorch.eu/) and a toolset from Google.

## Versioning

We use [Semantic Versioning 2.0.0](https://semver.org/). That means a Version is 1.2.3, where 1 is a major release that brings up fundamental changes and includes new features that might also break compatibility with child themes, 2 is a minor release and 3 is a single fix or a set of some bugfixes. We use 1.0.1-test123 for releases only for testing-purpose, 1.0.1-alpha123 for releases that are in an early pre-release stadium and 1.0.1-beta123 for releases that are good for a beta test or development servers.

## License

Dyna is a Free Open Source Project. That means it is free of charge, you can use it for building commercial websites and commercial themes. Read the GPL 2.0 Licence here: https://github.com/dyna-press/dyna-starter-theme/LICENCE

## Contribution

We love every kind of contribution. There are many things you may do to help, even if you are no developer or a beginner. Look for the [want-help issues](https://github.com/dyna-press/dyna/labels/want-help) in this repo. We will write soon more about contribution, but if you want to help building just drop me a line or create an [issue](https://github.com/dyna-press/dyna/issues).

## Donation

I have not yet set up donations, but if you want to be informed about how to help me building Dyna or how to participate in this project, drop me a line: [alf@dyna.press](mailto:alf@dyna.press).

## Support

Stuck? Create an [issue](https://github.com/dyna-press/dyna/issues) and I will help you out.

<br/>
<br/>
<p align="center">
<a href="http://dyna.press">
<img src="https://github.com/dyna-press/dyna-assets/blob/master/dyna-signet/dyna-signet-blue-256.png?raw=true" alt="Dyna Website"/>
</a>
</p>
