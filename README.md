# WPMB-Custom-Theme

## Intent
My goal is to build a light weight WordPress theme from scratch that meets *my* needs.

## Limitations
This theme will not be built with translation in mind.

The theme **requires** 3rd party plugins.
- ACF Pro (not used yet, but it will be)
- Max Mega Menu
- Font Awesome (see SCSS)

The theme will have styles for my other "plugins". It would be silly to add styles anywhere other than here. So, if you're going to use my CSS/SCSS but not all my plugins, you should deactivate what you're not using.

## Questions?

Have a question?

Hit me up on Twitter: https://twitter.com/_JoshRobbs

## Notes and hints

### SCSS
The SCSS is organized similarly to Atomic Design. 

In other words, I tried to set it up for Atomic Design but probably didn't do it exactly right - but I don't care to hear about deviations.

But if you have suggestions for doing it better, I'm all ears.

I've added Fontawesome through the SCSS. You can see it in the CSS. But there shouldn't be a single actual file in the repo. 
Comment out the FA import before you process the SCSS files. 

### Comments

My comments might have some "strange" characters. They're markers for the Todo Tree extension (VS Code). They don't do anything else.

Symbol legend:
 - BUG - bug/error
 - INFO - additional data I want to draw attention to
 - ?? - Decision to make
 - !! - WTF
 - [] - to do
 - [x] - done (I can't show you in .md. It's the to do symbol with a lowercase "x" in the middle.)
