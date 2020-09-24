<html>
	<head>
	<title>Mikedown - Mike's Markdown Language</title>
		<style>
			html {
				font-family: Arial, Helvetica, Sans-Serif;
			}
			.showscript {
				border: 1px solid grey;
				border-left: 4px solid black;
				display: inline-block;
				padding-top: 4px;
				padding-bottom: 4px;
				padding-right: 4px;
			}
			.shownum {
				border-right: 1px solid grey;
				margin-right: 5px;
				padding-right: 5px;
			}
			.green {
				color: green;
			}
			.brown {
				color: brown;
			}
			.blue {
				color: blue;
			}
			.red {
				color: red;
			}

		</style>
	</head>
<body>
	<h1>Mikedown - Ditch HTML code!</h1>
	<h3>Mikedown is a markdown language designed by Mike. Mikedown is designed for those who are not very good at web development, and is designed for html documents.</h3>
	<p>Mikedown is used as an extension and can be implemented externally. To use Mikedown, all you need to do is attach the following between the &lt;head&gt; tags of all your webpages:</p>
	<pre class='showscript'><span class='shownum'> 1</span><span class='green'>&lt;script</span> <span class='blue'>src</span>=<span class='brown'>"https://code.mikedown.com/0.0.1.js"</span><span class='blue'>&gt;&lt;/script&gt;</span></pre>
	<h2>How Mikedown works!</h2>
	<p>Mikedown searches your document for a certain characterset and turns it into coding magic! For example, if you use two underscores, Mikedown recoginzes that as underlined text. For example:</p>
	<pre class='showscript'><span class='shownum'>  1</span>This is an <span class='green'>__</span>example<span class='green'>__</span> of how underlines work in Mikedown!!</pre> Outputs as: <pre class='showscript'><span class='shownum'>  1</span>This is an <span style='text-decoration:underline'>example</span> of how underlines work in Mikedown!</pre>
	<p>As HTML, this is what it looks like:</p>
	<pre class='showscript'><span class='shownum'>  1</span>This is an <span class='green'>&lt;span</span> <span class='blue'>style</span>=<span class='brown'>"text-decoration:underline;"</span><span class='green'>&gt;</span>example<span class='green'>&lt;/span&gt;</span>of how underlines work in Mikedown!</pre>
	<h3>Yeah, we don't know either, that's why we recommend Mikedown!!</h3><br>
	<h2>Different types of charactersets!</h2>
	<p>There are over 50 different charactersets that are specifically designed for Mikedown, each for every single type of code!</p>
	<h2>Blends</h2>
	<p>Blending is the act of mixing 2 or more charactersets! Mikedown supports this! Simply do this:</p>
	<pre class='showscript'><span class='shownum'> 1</span><span class='blue'>*</span><span class='green'>_</span>Blending these two charactersets should be illegal, but we did it anyway!<span class='green'>_</span><span class='blue'>*</span></pre>
	<p>This makes the text both italicized and underlined! It looks something like this:</p>
		<pre class='showscript'><span class='shownum'> 1</span><span style='text-decoration: underline; font-style: italic;'>Blending these two charactersets should be illegal, but we did it anyway!</span></pre><br>
		<pre class='showscript'><span class='shownum'> 1</span><span class='blue'>*</span>You're damn right that <span class='green'>__</span>you can do this in separate spots<span class='green'>__</span> too!<span class='blue'>*</span></pre>
	<p>The only difference is that with this one above, you have to use two underscores instead of one. When Mikedown charactersets are separated, they have to be in pairs of two. If we only use one underline, Mikescript automatically assumes that you are trying to separate something, rather than underline something.</p>
	<h2>Mistakes Happen!</h2>
	<p>Sometimes Mikedown picks up something that you don't want Mikedown to recognize! For example:</p>
	<pre class='showscript'><span class='shownum'> 1</span>I want people to know this <span style='font-weight: bold;'>word</span> is important without Mikedown recognizing!</pre><br>
	<p>oh no! That wasn't supposed to happen! Whatever shall we do?!<br>Mikedown uses an escape character to simply ignore the characterset! This can be achieved by typing a \ before the characterset group! When typed, Mikedown will remove the backalashes and ignore the characterset group!</p>
	<pre class='showscript'><span class='shownum'> 1</span>I want people to know this <span class='red'>\**</span>word<span class='red'>\**</span> is important without Mikedown recognizing!</pre>
	<p>Becomes:</p>
		<pre class='showscript'><span class='shownum'> 1</span>I want people to know this **word** is important without Mikedown recognizing!</pre>
	<p>As you see, Mikedown turns both the backslash and the charactersets red. This means that it will not be picked up on the output of your document!</p>
	<h2>Pretty Colorz!</h2>
	<p>You can add colors with ease! This can be accomplished by a simple characterset! To add color, you can do this:
	<pre class='showscript'><span class='shownum'> 1</span><span style='color:purple;'>[<b>Purple</b> "This text looks colorful!"]</span></pre> will output: <pre class='showscript'><span class='shownum'> 1</span><span style='color:purple;'>This text looks colorful!</span></pre>
	<p>To break this down, <b>[</b> is the first half of the characterset. <b>Purple</b> is the color you want to color your text, <b>"This text is colorful!"</b> is the text you want to use (note: the text needs to be in quotes), <b>]</b> is the second half of the characterset.</p>
	<p>You can even use other charactersets to bold text and more!</p>