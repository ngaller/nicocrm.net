# nicocrm theme

Based on the Bones theme.

## Build Process

Gulpfile with following tasks:

 * build
 * clean
 * watch - watches changes to SCSS and uses browsersync to stream them to the browser
 * default task is clean + build

## Site Design

### Basic

Want:

 * Image that takes about half the screen with name, twitter/facebook etc icons (use FA - FA-Inverse)
 * Navigation item in the bottom right
 * Search box in the top right - fairly unobtrusive
 * Then: display 4 most recent posts in a row with picture + summary and link for more
 * No sidebar
 * Archive?
 *


### CSS organization

CSS was redone from the Bones theme.

 * Generic - very basic stuff i.e. reset
 * Base - base styles (mostly imported from skeleton stylesheet)
 * Mixins - SASS mixins
 * UI - specialization for areas of the page
 * font-awesome - font awesome distribution (unmodified)
 * modules - not sure
 * media - further media-specific styles (e.g. for printing)

