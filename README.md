# mikedown_markdown_language
 Ditch HTML Coding for easy markdown language!

# Mikedown - Ditch HTML code!
### Mikedown is a markdown language designed by Mike. Mikedown is designed for those who are not very good at web development, and is designed for html documents.

Mikedown is used as an extension and can be implemented externally. To use Mikedown, all you need to do is attach the following between the <head> tags of all your webpages:

```Javascript
<script src="https://code.mikedown.com/0.0.1.js"></script>
```

##How Mikedown works!

Mikedown searches your document for a certain characterset and turns it into coding magic! For example, if you use two asterisks, Mikedown recoginzes that as bolded text. For example:

`This is an **example** of how bolding works in Mikedown!!` Outputs as: This is an example of how **bolding** works in Mikedown!

As HTML, this is what it looks like:

```HTML
This is an <span style="text-decoration:underline;">example</span>of how underlines work in Mikedown!
```
### Yeah, we don't know either, that's why we recommend Mikedown!!

## Different types of charactersets!
There are over 50 different charactersets that are specifically designed for Mikedown, each for every single type of code!

## Blends
Blending is the act of mixing 2 or more charactersets! Mikedown supports this! Simply do this:

`*:Blending these two charactersets should be illegal, but we did it anyway!:*`

This makes the text both italicized and bolded! It looks something like this:

***Blending these two charactersets should be illegal, but we did it anyway!***

`You're damn right that __you can do this in separate spots__ too!*`

The only difference is that with this one above, you have to use two underscores instead of one. When Mikedown charactersets are separated, they have to be in pairs of two. If we only use one underline, Mikescript automatically assumes that you are trying to separate something, rather than underline something.

## Mistakes Happen!
Sometimes Mikedown picks up something that you don't want Mikedown to recognize! For example:

I want people to know this **word** is important without Mikedown recognizing!


oh no! That wasn't supposed to happen! Whatever shall we do?!
Mikedown uses an escape character to simply ignore the characterset! This can be achieved by typing a `\` before the characterset group! When typed, Mikedown will remove the backalashes and ignore the characterset group!

`I want people to know this \**word\** is important without Mikedown recognizing!`

becomes
I want people to know this **word** is important without Mikedown recognizing!

As you see, Mikedown turns both the backslash and the charactersets red. This means that it will not be picked up on the output of your document!

## Pretty Colorz!
You can add colors with ease! This can be accomplished by a simple characterset! To add color, you can do this:

`[Purple "This text looks colorful!"]` will output that but in purple text

To break this down, `[` is the first half of the characterset. ``Purple`` is the color you want to color your text, `"This text is colorful!"` is the text you want to use (note: the text needs to be in quotes), `]` is the second half of the characterset.

You can even use other charactersets to bold text and more!
