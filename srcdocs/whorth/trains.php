<?php
if($self['unread']) {
  $self['title'] = "WHORTH's trains - a word parsing feature";
  $self['headln'] = "WHORTH trains";
  $self['desc'] = <<<END
    WHORTH's parsing is slightly different then FORTH's. It is still word
    based but in addition to space it also break words on the inside of
    parentheses "<tt>{[()]}</tt>" and it also is aware of strings with
    double ticks ie: <tt>"double quotes"</tt>.
    END;
  $self['unread'] = 0;
}
if($honly) {
  return 0;
}
include "${lib}/head.php";
?>
<div><h1><?=$self['headln']?></h1>

<p class="ing">WHORTH's parsing is slightly different then FORTH's. It is still word based but in addition to space it also break words on the inside of parentheses "<tt>{[()]}</tt>" and it also is aware of strings with double ticks ie: <tt>"double quotes"</tt>.</p>

<h2>Parentheses train</h2>

<p>Lets start with a simple example:</p>

<p><tt>Some text like{this is [broken up ]into words in the}following(way)<br>
<br>
some, text, like{, this, is, [, broken, up, ]into, words, in, the, }following(, way, )</tt></p>

<p>The parser also match the parentheses and complain if they are unbalanced. To separately (not as part of a train) refer to or define a word containing parentheses You must quote them ie: <tt>"like{"</tt>, <tt>"["</tt>, <tt>"}following("</tt>.</p>

<p>The parser use a parser stack (pst) that is available to store status shared by a train. When a word is executed by the text interpreter/compiler the train status belonging to it is at the top of pst. The above example contain two trains:</p>

<ol>
<li><tt>like{ ... }following( ... )</tt></li>
<li><tt>[ ... ]into</tt></li>
</ol>

<p>The individual word is called in the order they appear in the source but each word have access to the trains own private place to store status - it actually make it simpler to extend WHORTH then standard FORTH!</p>

<p>A planned extension to train is to treat 'bare' train words like: ")", "}{" (but not opening one) differently. Giving the train's pst entry place for hooks for function to call for the bare train word allowing slicker trains. In an <tt>if{ ... }then</tt> train the "<tt>if{</tt>" can set "<tt>}then</tt>" as the hook for "<tt>}</tt>" so you can write just <tt>if{ ... }</tt> (defining "<tt>}</tt>" directly is obviously a bad idea because many trains would want to do that).</p></div>

<div><h2>Strings</h2>

<p>A string is treated as one word with its spaces and everything. If it is not explicitly read with word the interpreter treat it as a literal. Strings can have prefix that parse in to the word followed by a single tick ie: <tt>."string"</tt> parse to <tt>.'</tt>, <tt>string</tt>. Yes - You can define <tt>."</tt> that don't need a space between it and the string. When a string prefix is called as part of a string it is implicitly immediate as the string is immediate.</p>

<p>Postfix to a string are flags to the parser / interpreter / compiler. So far only used for format strings (see below) but there's plans for more flags controlling quoting, encoding and stuff.</p>

<h3>Format strings</h3>

<p>Posfix <tt>f</tt> and <tt>F</tt> make a string format as pythons new f"{}" formatting and take the parameters from the stack with top element first. <tt>f</tt> do formatting at runtime and compile at compile time. <tt>F</tt> always do formatting so You can do formatting at compile time. You can use both <tt>f</tt> and <tt>F</tt> on the same string. Formatting of strings are nondestructive to the stack, values are read from the stack but not consumed. That make them useful to print traces as they have no side effects. It do lead to allot of drop thou. Some alternative form is thought about loosely (<tt>l</tt>/<tt>L</tt> to consume a list of the stack and <tt>d</tt>/<tt>D</tt> to consume a dict). Her follows an example of a format string using both <tt>f</tt> and <tt>F</tt> (&lt;w&gt is prompt, orange is output):<p>

<p><tt>&lt;w&gt "Compiletime |" " Runtime:{}"<br>
&lt;w&gt : log (i &gt;)   ."LOG: {1}{0}!"fF  drop ;   drop drop<br>
&lt;w&gt; 5 log<br>
<span class="out">LOG: Compiletime | Runtime:5!</span></tt></p>

<p>It would be nice to integrate strings in train but it is not decided how as the flags kind of get in the way - leading candidate is a <tt>.</tt> (dot) to tie the train together after a string (and its flags).</p>

<p><tt>a" funky string"f.that{is}part"of a train"</tt></p>

<p>parsing into the train:</p>

<p><tt>a' word '.that{ ... }part' word</tt></p>

<p>But nothing implemented yet.</p>

<h3>Decorators</h3>

<p>A string can be decorated by "<tt>&lt&gt;|\*#</tt>" matching on ether side like: <tt>&lt;|"one string"|&gt;</tt> or <tt>**"one more"**</tt>. That way it is possible to quote anything. They are removed by the parser so if You define <tt>.'</tt> You can call it as <tt>.&lt;"a "string" with quotes"&gt;</tt> to avoid the quotes messing it up.</p>

<h3>Comments and documentation</h3>

<p>If a strings decorator contains at leas one <tt>#</tt> it is considered a comment and silently dropped from the input stream unless it have a prefix. If it have a prefix the prefix turn in to a word with <tt>#'</tt> added and the comment turn in to a word as any other string. The word <tt>D#'</tt> is defined that add documentation to the latest defined word ie: <tt>D#"some documentation."#</tt> or <tt>D&lt;&lt##"some more screaming documentation."##&gt;&gt;</tt>. Prefixes for comments are meant for stuff like that but nothing stop You from using it for any string stuff.</p></div><?php
include "${lib}/foot.php";

