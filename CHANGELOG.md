# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog (site link)](http://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning (site link)](http://semver.org/spec/v2.0.0.html).

[Visit the Live Site](https://stacalkas.github.io) - A portfolio website for Britt.


## [Unreleased]
### Added
- For new features.

### Changed
- For changes in existing functionality.

### Deprecated
- For once-stable features removed in upcoming releases.

### Fixed
- For any bug fixes.

### Removed
- For deprecated features removed in this release.

### Security
- To invite users to upgrade in case of vulnerabilities.


Future Release:
Go thru tv shows and add any missing years (there should be a bunch!!!)
This may also be the time to go thru my web design videos and see If I want to add anything else???
Look at Font Awesome 6 and rip the guts out of it for my site. (I don't need rj- for my icons, I believe)
Redo Rose Jerky Icon fonts (Do I want to welding, cutting, etc icons???)
Move rj-icons.ttf out of webfonts (delete folder after) and into website root ???
Remove Bed, Film, and TV icons from Rose-Jerky.

## [4.4.1] - 2021-11-28
### Added
- hentai.html.
- tv.html.
- movies.html.

### Changed
- samples.html.
- files.html.
- games.html.
- quotes.html.
- Linked back to youtube for videos.
- Split files on files.html that were over 25mb into smaller pieces.
- Britt-Headshot.webp.
- Moved favicon into root of images folder.
- Removed icons from hentai, tv, and movies.

### Removed
- Local videos as github wouldn't allow me to upload large files.
- Icons folder and moved favicon into images folder root.
- moviesTV.html.

## [4.4.0] - 2021-11-15
### Added
- files.html.
- samples.html.
- rosejerky.scss.
- DM-Outpost game-play video.
- DM-Outpost poster for video.
- BTS_DM-Outpost video that has behind the scenes voice-over.
- BTS_DM-Outpost subtitles for video.
- BTS_DM-Outpost poster for video.
- Britt-Headshot.webp.

### Changed
- books.html.
- contact.html.
- games.html. Noted which ones I have discs of.
- index.html.
- models.html.
- moviesTV.html. Noted which ones I have discs of.
- quotes.html.
- README.md.
- toys.html.
- downloads folder renamed to files.
- rosejerky icons now inherit base font family properties.
- Resume files.
- Border on to-top button.
- Main menu and Mobile menu no longer use javascript to show/hide/highlight menu items.

### Removed
- Facebook link on quotes.html.
- Non-important full size images and their thumbnails.
- Non-important video "posters".
- log.html.
- lazyload.js.
- showdown.js.
- images.html.
- videos.html.
- Alternate rose-jerky font files. Sticking to TrueType only for now.
- Font Awesome.
- bs-javascript.js.

### Special Note
- Focus on making the site more, "Self-contained".

## [4.3.02] - 2020-12-25
### Added
- New model image.

### Changed
- moviesTV.html.
- movie/tv year from being surrounded by [year] to (year).
- Icon for category of video from being after text to before it.
- quotes.html.
- models.html.
- Website Notes section on About page to Website Version Number.

### Fixed
- Some missing paragraph end tags in moviesTV.html.
- Animated buttons, that were animating on page load instead of only animating on hover.
- Movie titles in moviesTV.html that were incorrectly named.

## [4.3.01] - 2020-07-09
### Added
- New model images.

### Changed
- index.html, changed Related Skills.
- moviesTV.html.
- Resume_BrittScott.doc.
- Resume_BrittScott.pdf.
- Resume_BrittScott.txt.
- models.html.
- quotes.html.

### Removed
- Some toys from toys.html.

## [4.3.0] - 2020-04-27
### Added
- More descriptive links.
- More descriptive alt text to images, in the event that they do not load.
- Fullsize_ and Thumbnail_ , before images.

### Changed
- quotes.html.
- moviesTV.html.
- images.html.
- contact.html.
- books.html.
- toys.html.
- models.html.
- comics.html.

### Fixed
- moviesTV.html spelling mistakes.

### Removed
- jpg thumbnails and fullsize images.

### Special Note
- Started to make the site blind-friendly, but halted work. This was due to the realization that this would require a complete site overhaul.

## [4.2.01] - 2019-11-02
### Added
- bs-javascript.min.js.
- showdown.min.js.

### Changed
- All html files to reference bs-javascript.min.js
- log.html to reference showdown.min.js.
- models.html.
- moviesTV.html.
- All hover animations from 0.5s to 0.25s.

## [4.2.0] - 2019-10-30
### Added
- min-height to gallery images.
- lazyload.min.js.
- lazyload images.
- lazyload iframes for videos.
- New Model Images and thumbnails.
- Webp versions of all images, but keeping jpg versions as a fallback except for large images.

### Changed
- games.html.
- models.html.
- moviesTV.html.
- quotes.html.
- Margin-top spacing on powered-by div.
- Gallery Download links to have better alignment.

### Fixed
- Multiple .html files not referencing fontawesome.min.css.
- Some release dates in the Changelog that were being displayed as clickable links.

### Removed
- Sprite files and any associated files.
- gallery image classes, since they referenced sprite files.
- W3 JS except search filter functions.
- Movie/Tv rating system.

## [4.1.25] - 2019-06-23
### Added
- Border to bottom of the menu to separate elements that are the same color as the menu.
- Border to top of the footer to separate elements that are the same color as the menu.

### Changed
- models.html.
- moviesTV.html.
- quotes.html.
- toys.sprite.jpg.
- toys.sprite.scss.
- toys.sprite.css.
- toys.sprite.min.css.

### Fixed
- Menu button, Contact, referencing old php code.
- Sass referencing .png instead of .jpg (might become a reoccurring issue).
- Formatting in Resume_BrittScott.txt.
- Spelling error in metadata for all html files.

### Removed
- Optimus Prime 20th Anniv from toys.html.
- OpimusPrime20Anniv.jpg from toy thumbs.

## [4.1.24] - 2019-01-20
### Added
- TheIronMan.jpg.
- Ford73Mustang.jpg.
- New version of megadon logo.

### Changed
- moviesTV.html.
- games.html.
- books.html.
- books.sprite.min.css.
- models.html.
- models.sprite.min.css.

### Security
- Updated to Font Awesome 5.6.3.

## [4.1.23] - 2018-11-22
### Fixed
- Menu hover transitions.

## [4.1.22] - 2018-11-14
### Added
- fontawesome.min.css.
- showdown.js.
- books.sprite.css.
- levels.sprite.css.
- models.sprite.css.
- toys.sprite.css.
- sprite-based scss files.
- books.sprite.jpg.
- levels.sprite.jpg.
- models.sprite.jpg.
- toys.sprite.jpg.

### Changed
- Formatting of CHANGELOG.md to include types of changes.
- All pages to reference fontawesome.min.css.
- All pages that used sprite-images to a new sprite-creation system.
- bs-javascript.js to include load markdown function.
- log.html to load markdown files with fewer javascript files.
- the name of the sass folder to scss.

### Removed
- head.min.js.
- markdown.js.
- marked.js.
- reveal.js.
- ThumbsBooks.css.
- ThumbsLevels.css.
- ThumbsModels.css.
- ThumbsToys.css.
- ThumbsBooks.jpg.
- ThumbsLevels.jpg.
- ThumbsModels.jpg.
- ThumbsToys.jpg.

## [4.1.21] - 2018-11-01
### Changed
- Updated main.css.
- Updated bs-javascript.js

### Fixed
- Menu not linking to log page.

## [4.1.2] - 2018-10-31
### Added
- head.min.js.
- markdown.js.
- marked.js.
- reveal.js.
- log.html.

### Changed
- Menu to include link to log page.
- Updated MoviesTV page.

### Removed
- blog.html.

## [4.1.1] - 2018-10-24
### Added
- Readme file.
- Changelog file.

### Changed
- Contact page to mailto because github pages do not support php.
- All pages to use minified version of css.
- Updated notes on About page.
- Updated Books page.
- Updated MoviesTv page.

### Fixed
- Transition animations not playing in Chrome.

### Removed
- Holder.js.
- contact.php.

## [4.1.0] - 2018-10-07
### Added
- Contact page.

### Changed
- Entire style of website.
- Color scheme.
- Galleries to use CSS Grid.

### Removed
- JQuery.
- Background grid graphic.

## [4.0.84] - 2018-09-16
### Changed
- Links on about page.

## [4.0.83] - 2018-09-04
### Changed
- Updated MoviesTv page.

## [4.0.82] - 2018-07-07
### Added
- Side scroller to images page.

### Changed
- Updated to Font Awesome 5.1.0.
- BS Level-designer logo.
- Updated download links on images page.

## [4.0.81] - 2018-05-13
### Changed
- Updated to Font Awesome 5.0.13.

## [4.0.8] - 2018-04-06
### Changed
- Updated to Font Awesome 5.0.9.

## [4.0.7] - 2018-03-04
### Changed
- Updated to Font Awesome 5.0.8.

## [4.0.6] - 2018-02-01
### Changed
- Sass files.
- Menu.
- Javascript file.
- Updated Models page.
- Updated to Font Awesome 5.0.6.

### Removed
- Contact page.
- CAPTCHA files.

## [4.0.5] - 2018-01-28
### Added
- Old CAPTCHA system.

### Removed
- Google's ReCAPTCHA.

## [4.0.4] - 2018-01-15
### Added
- Rose Jerky .eot font version.

### Changed
- Some bigger downloads to use Google drive links.
- Updated MoviesTv page.
- Updated Quotes page.

### Removed
- Some bigger downloads.

## [4.0.3] - 2018-01-13
### Added
- Links in powered by section on about page.

## [4.0.2] - 2018-01-05
### Added
- Counter-clockwise and flipped counter-clockwise animation to Font Awesome 5.

## [4.0.1] - 2018-01-02
### Changed
- Rose Jerky to part of Font Awesome 5 using SASS.

## [4.0.0] - 2017-12-26
### Added
- Updated Rose Jerky font.
- Sprite image thumbnails.

### Changed
- Website version numbering.

## [3.9.0] - 2017-12-08
### Added
- SASS files.

### Changed
- Updated to Font Awesome 5.

## [3.8.3] - 2017-12-03
### Added
- Search input to blog page.

### Changed
- Updated Movies/TV page.
- Contact form icons to be smaller on mobile.

### Removed
- Movies page.
- TV shows page.

## [3.8.2] - 2017-12-02
### Added
- Tags to Movies/TV page to indicate if it is a movie or tv show.
- Rating system of good/bad to Movies/TV page.

### Changed
- Updated other list pages to reflect changed made to Movies/TV page.
- Moved W3 CSS classes to their own css.

## [3.8.1] - 2017-12-01
### Changed
- Moved W3 CSS classes of nav and footer, to their own css.
- Updated nav, header, footer, bg-grid and To-Top, to all pages.

### Removed
- w3-padding-12 from site.

## [3.8.0] - 2017-11-30
### Added
- Movies/TV page.

### Changed
- Styled Movies/TV page different than previous pages.
- Simplified To-Top Button and background grid.

## [3.7.5] - 2017-11-29
### Added
- Quotes page.
- A website version display.

### Changed
- Polished about page.
- Head area on all pages.

## [3.7.4] - 2017-11-25
### Changed
- Desktop menu to show in tablet mode.
- Some elements to show/hide section in the css.

## [3.7.3] - 2017-11-24
### Changed
- Updated to W3 CSS v4.06.
- Mobile menu click areas to 100% width.

## [3.7.2] - 2017-11-23
### Added
- Border to model images.

### Changed
- bs-no-hover to w3-hover-none.

### Removed
- bs-no-hover class.

## [3.7.1] - 2017-11-22
### Added
- Mobile menu hover.
- Background color to legend sections.

### Changed
- CSS pixels to rem units.
- Nav and footer heights.
- Mobile menu, click area.
- Search input to move to to, when on mobile.
- General CSS clean-up.

### Fixed
- No-hover class.

## [3.7.0] - 2017-11-21
### Changed
- Menu highlight to use a class instead of an id.

### Fixed
- Mobile menu highlighting.

## [3.6.9] - 2017-11-18
### Changed
- Code cleanup for images and their descriptions.

## [3.6.8] - 2017-11-04
### Added
- Menu highlighting using JQuery.

### Changed
- Update to W3 CSS v4.05.

## [3.6.7] - 2017-11-01
### Changed
- Updated models page.

## [3.6.6] - 2017-10-25
### Fixed
- Zoom scaling.

## [3.6.5] - 2017-10-10
### Removed
- Local videos.

## [3.6.4] - 2017-09-14
### Changed
- CSS styling.

## [3.6.3] - 2017-09-13
### Changed
- Base core components.

## [3.6.2] - 2017-09-10
### Changed
- Updated Rose Jerky Font to v1.1.

## [3.6.1] - 2017-09-09
### Added
- Text version of resume.

## [3.6.0] - 2017-09-07
### Changed
- Base core components.
- Back to using inline svg code in html.

## [3.5.7] - 2017-09-03
### Added
- Animated svg graphics.

### Changed
- Base core components.

## [3.5.6] - 2017-07-15
### Changed
- Updated models page.
- Reset button to left side on contact page.

## [3.5.6] - 2017-06-21
### Changed
- Resumes.

## [3.5.5] - 2017-06-17
### Added
- Extras menu item.

### Changed
- Updated books page.
- Updated movies page.
- Updated games page.

### Fixed
- Menu bugs.
- Dropdown alignment.
- Remaining css issues from upgrading W3 CSS.

## [3.5.4] - 2017-06-10
### Changed
- Updated models page.

## [3.5.3] - 2017-05-27
### Changed
- Updated to W3 CSS v4.04.
- Main menu to work with new W3 CSS version.

## [3.5.2] - 2017-05-26
### Changed
- Jegan model to complete.

## [3.5.1] - 2017-05-25
### Added
- MG GM Sniper II to models page.

### Changed
- Updated tv shows page.

## [3.5.0] - 2017-05-11
### Changed
- Updated movies page.
- Updated models page.

## [3.4.9] - 2017-04-28
### Changed
- Barbatos 1/100 model to completed.
- Updated tv shows page.

## [3.4.8] - 2017-04-10
### Added
- Book cover images.

### Changed
- Updated books page.
- Updated notes on about page.

## [3.4.7] - 2017-04-03
### Changed
- Updated movies page.
- Books page with placeholder code.

## [3.4.6] - 2017-03-30
### Changed
- Updated movies page.
- Updated tv shows page.

## [3.4.5] - 2017-03-20
### Changed
- Updated movies page.

## [3.4.4] - 2017-03-18
### Added
- Image placeholder javascript.
- Doom book images.

### Removed
- No picture available image.
- Old model files.

## [3.4.3] - 2017-03-17
### Changed
- Updated movies page.

## [3.4.2] - 2017-03-14
### Added
- Google's ReCAPTCHA.

### Changed
- Updated W3 CSS.

### Fixed
- General code formatting.

### Removed
- My custom CAPTCHA.
- Local videos.

## [3.4.1] - 2017-03-13
### Added
- W3 CSS library.
- Font Awesome 4.
- Book cover images.

## [3.4.0] - 2017-02-07
### Changed
- Layout to resemble my original website concept.

## [3.3.2] - 2016-12-09
### Added
- Side Scroller download.

## [3.3.1] - 2016-11-05
### Added
- Rally Car and Xbox Gamepad download.

## [3.3.0] - 2016-06-19
### Added
- Third version of HTML5 site.
- Comics page.

### Removed
- Image sprites.

## [3.2.4] - 2015-10-20
### Added
- Toys page.

## [3.2.3] - 2015-05-15
### Added
- Models page.

## [3.2.2] - 2015-04-21
### Added
- Image sprites for logos

## [3.2.1] - 2014-12-22
### Added
- Books page.
- Anime page.

## [3.2.0] - 2014-10-03
### Added
- Second version of HTML5 site.
- CSS media queries for mobile.

### Changed
- From single-page layout to multiple pages.

## [3.1.9] - 2014-04-13
### Added
- CAPTCHA system to contact form.
- Movies page.
- TV Shows page.

## [3.1.8] - 2014-02-24
### Added
- Error pages.

## [3.1.7] - 2014-01-31
### Added
- SCUG (UT3 Mod) download.
- SCUG postmortem.
- SCUG (UT3 Mod) screenshots.

## [3.1.6] - 2013-12-05
### Added
- Games page.

## [3.1.5] - 2013-11-28
### Removed
- SVG images.

## [3.1.4] - 2013-04-15
### Added
- Javascript status message on contact from submission.

### Fixed
- Requirement for all forms to filled out.

## [3.1.4] - 2013-01-07
### Added
- Image counter to gallery.

### Changed
- Favicon to match menu version.
- Spacing between sections.

### Removed
- Map links from employment history.

## [3.1.3] - 2012-09-18
### Added
- Dual Core v2.16 download.

## [3.1.2] - 2012-09-16
### Added
- Dual Core v1.0 download.

## [3.1.1] - 2012-09-13
### Added
- Dual Core v3.0.5 download.

## [3.1.0] - 2012-05-06
### Added
- CSS File.
- Javascript File.
- SVG Images.
- Icons for sections.
- Site version control.

### Changed
- First version of HTML5 site complete.

### Removed
- Blog.
- RSS Feed.

## [3.0.0] - 2012-04-05
### Added
- First version of HTML5 site.

## [2.2.2] - 2012-03-16
### Fixed
- Youtube videos.

## [2.2.1] - 2012-02-01
### Added
- SCUG (UT3 Mod) screenshots.

## [2.2.0] - 2011-11-30
### Added
- Second version of Actionscript 3, flash site.
- Safeguards against SPAM.
- First version of BS level-designer logo.

### Changed
- Load videos via Youtube instead of loading video files directly.

## [2.1.0] - 2011-07-22
### Added
- HTML mobile version, for non-flash users.
- Dynamic year for copyright.

## [2.0.1] - 2010-08-13
### Changed
- First version of Actionscript 3, flash site complete.

## [2.0.0] - 2010-07-29
### Added
- First version of Actionscript 3, flash site.
- SCUG (UT3 Mod) screenshots.

## [1.4.01] - 2010-02-18
### Added
- SCUG (UT3 Mod) screenshot.
- RSS Feed.

## [1.4.00] - 2009-11-30
### Added
- Fifth version of Actionscript 2, flash site.
- php contact form.

### Changed
- site to be more focused on level design.

### Removed
- mailto email.

## [1.3.06] - 2009-09-16
### Added
- Farm Level screenshot.

### Fixed
- Some site bugs.

## [1.3.05] - 2009-06-04
### Changed
- General site cleanup.
- portrait image.

## [1.3.04] - 2009-05-28
### Changed
- Fourth version of Actionscript 2, flash site is complete.

## [1.3.03] - 2009-04-20
### Added
- Farm Level screenshot.

## [1.3.02] - 2009-03-26
### Added
- Farm Level screenshot.

## [1.3.01] - 2009-03-19
### Added
- Bookmark icon.

### Changed
- Minor site update.

## [1.3.00] - 2009-03-04
### Added
- Fourth version of Actionscript 2, flash site.

## [1.2.04] - 2009-02-19
### Changed
- General site update.

## [1.2.03] - 2009-02-15
### Added
- Farm level screenshots.

## [1.2.02] - 2009-02-05
### Added
- Mech/Robot Starter Kit download.

## [1.2.01] - 2009-01-27
### Added
- Farm level screenshots.

## [1.2.00] - 2009-01-12
### Added
- Third version of Actionscript 2, flash site.

## [1.1.1] - 2008-12-25
### Added
- Blog section.

### Changed
- Files to work on Godaddy hosting.

## [1.1.0] - 2008-09-12
### Added
- Second version of Actionscript 2, flash site.

## [1.0.0] - 2007-09-26
### Added
- First version of Actionscript 2, flash site.